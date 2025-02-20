<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Protect;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function admin(){
       
        return view('admin.admindashboard',);
    }
    public function addNews(){
        return view('admin.pages.add_news');
    } 
    public function showNews(){
        $news=News::all();
        return view('admin.pages.show_news',compact('news'));
    }

    public function subscriberMessage(){
        $subscriptions= Subscribe::all();
        return view('admin.pages.subscriber_messages',compact('subscriptions'));
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
      return redirect()->route('show.news');
  }
        //admin.protection//
        public function addProtect(){
            return view('admin.pages.add_protect');
        }
        public function addProtectStore(Request $request){
            $request->validate([
                'protect_title' => 'required|max:255',
                'short_p'=>'required|max:255',
                'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'pro_rules1'=>'required',
                'pro_rules2'=>'required',
                'pro_rules3'=>'required'
            ]);
            $imgName=time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/images'),$imgName);

            Protect::create([
                'protect_title'=>$request->protect_title,
                'short_p'      =>$request->short_p,
                'image'        =>$imgName,
                'pro_rules1'  =>$request->pro_rules1,
                'pro_rules2'    =>$request->pro_rules2,
                'pro_rules3'=>$request->pro_rules3

            ]);
            Alert::success('Success', 'Protection Rules added Successfully');
            return redirect()->route('show.news');
        }
        public function ShowProtec(){
            $protect=Protect::all();
            return view('admin.pages.show_protect',compact('protect'));
        }

        public function editProtect($id){
            $edit=Protect::find($id);
            return view('admin.pages.protect_edit',compact('edit'));
        }

        public function updateprotect(Request $request, $id){
            $update=$request->validate([
                'protect_title' => 'required|max:255',
                'short_p'=>'required|max:255',
                'image'=>'Nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'pro_rules1'=>'required',
                'pro_rules2'=>'required',
                'pro_rules3'=>'required'
            ]);

            $data = Protect::Find($id);
  
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
            return redirect()->route('show.protect');

        }
  


//----------------------//Frondend Pages//--------------------------//
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
    public function about(){
        return view('frond.pages.about');
    }
    public function protect(){
        $protect=Protect::all();
        return view('frond.pages.protect',compact('protect'));
    }
    public function doctor(){
        return view('frond.pages.doctor');
    }


    
    
}
