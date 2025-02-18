<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function admin(){
        $news=News::all();
        $subscription= Subscribe::all();
       return view('admin.admindashboard',compact('news','subscription'));
    }

public function store(Request $request){
    $request->validate([
        'title' => 'required|max:255',
        'short_p'=>'required|max:255',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'des'=>'required'
    ]);
    $imgName=time() . '.' . $request->image->getClientOriginalExtension();
    $request->image->move(public_path('upload/images'),$imgName);

    News::create([
        'title'=>$request->title,
        'short_p'=>$request->short_p,
        'image'=>$imgName,
        'description'=>$request->des
    ]);
    Alert::success('ok', 'News Added Successfully');
    return redirect()->back();
  }
  public function edit($id){
    $edit= News::find($id);
    return view('admin.news_edit',compact('edit'));
  }
  public function update(Request $request, $id)
  {
    
      $update = $request->validate([
          'title' => 'required|max:255',
          'short_p' => 'required|max:255',
          'des' => 'required'
      ]);
  
      $data = News::Find($id);
  
      if ($request->hasFile('image')) {
          
          if ($data->image && file_exists(public_path('upload/images/' .$data->image))) {
              unlink(public_path('upload/images/' .$data->image));
          }
          $imgName = time() . '.' . $request->image->getClientOriginalExtension();
          $request->image->move(public_path('upload/images'), $imgName);
          $update['image'] =  $imgName;
      }
  
      $data->update($update);
      Alert::success('Success', 'Data Updated Successfully');
      return redirect()->back();
  }
  
  public function home(){
    return view('home');
  }

public function userStore(Request $request){
    $request->validate([
        'name' => 'required',
        'message'=> 'required',
        'date' => 'required'

    ]);

    Subscribe::create([
        'name'=>$request->name,
        'message'=>$request->message,
        'date'=>$request->date,
    ]);
    Alert::success('Success', 'You Submited your Message Successfully');
    return redirect()->back();
   }
    public function userdashboard(){
    return view('dashboard');
    }
    public function news(){
        return view('frond.pages.news');
    }

}
