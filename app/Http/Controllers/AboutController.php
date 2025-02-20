<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.pages.add_about');
    }
    public function storeAbout(Request $request){
        $request->validate([
            'about_title'=>'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_text'=> 'required'
        ]);

        $imgName=time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('upload/images'),$imgName);
        About::create([
            'about_title'=>$request->about_title,
            'image'=> $imgName,
            'about_text'=>$request->about_text

        ]);
        Alert::success('Message','About Virus added successfully');
        return redirect()->back();

    } 
    public function showAbout(){
        $about=About::all();
        return view('admin.pages.show_about',compact('about'));
    }
    public function editAbout($id){
        $editabout=About::find($id);
        return view('admin.pages.edit_about',compact('editabout'));
    }
    public function updateAbout(Request $request,$id){
        $aboutupdate= $request->validate([
            'about_title'=>'required',
            'image' =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_text'=> 'required'
        ]);
        $aboutdata=About::find($id);

        if ($request->hasFile('image')) {
                
            if ($aboutdata->image && file_exists(public_path('upload/images/' .$aboutdata->image))) {
                unlink(public_path('upload/images/' .$aboutdata->image));
            }
            $imgName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/images'), $imgName);
            $aboutupdate['image'] =  $imgName;
        }
        $aboutdata->update($aboutupdate);
        Alert::success('Message','About page Edited Successfully');
        return redirect()->route('admin.show.about');
    }

    
       
}
