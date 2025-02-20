<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function addNews(){
        return view('admin.pages.add_news');
    } 

    public function showNews(){
        $news=News::all();
        return view('admin.pages.show_news',compact('news'));
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
        return redirect()->route('show.news');
      }

      public function edit($id){
        $edit= News::find($id);
        return view('admin.pages.edit',compact('edit'));
      }
      public function newsupdate(Request $request, $id){
        $update=$request->validate([
            'title' => 'required|max:255',
            'short_p'=>'required|max:255',
            'image'=>'Nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'des'=>'required'
        ]);

        $data=News::find($id);
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
        return redirect()->route('show.news');
      }
      
}
