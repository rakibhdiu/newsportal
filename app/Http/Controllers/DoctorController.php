<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    public function showDoctor(){
        $doctor=Doctor::all();
        return view('admin.pages.show_doctor',compact('doctor'));
    }
    public function addDoctor(){
        return view('admin.pages.add_doctor');
    }
    public function storeDoctor(Request $request){
        $request->validate([
            'title'=>'required',
            'image_icon'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required'
        ]);
        $imgName1=time() . '.' . $request->image_icon->getClientOriginalExtension();
        $request->image_icon->move(public_path('upload/images'),$imgName1);

        $imgName=time() . '.' . $request->bg_image->getClientOriginalExtension();
        $request->bg_image->move(public_path('upload/images'),$imgName);

        Doctor::create([
            'title'=>$request->title,
            'image_icon'=>$imgName1,
            'bg_image'=>$imgName,
            'description'=>$request->description
        ]);
        Alert::success('Message','Doctor Suggestion Added Successfully');
        return redirect()->back();
        
    }
    public function editDoctor($id){
        $editdoctor=Doctor::find($id);
        return view('admin.pages.edit_doctor',compact('editdoctor'));
    }
    public function updateDoctor(Request $request, $id){
        $updatedoc=$request->validate([
            'title'=>'required',
            'image_icon'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required'
        ]);
        $docdata=Doctor::find($id);
        if ($request->hasFile('image')) {
                
            if ($docdata->image_icon && file_exists(public_path('upload/images/' .$docdata->image))) {
                unlink(public_path('upload/images/' .$docdata->image_icon));
            }
            $imgName1 = time() . '.' . $request->image_icon->getClientOriginalExtension();
            $request->image_icon->move(public_path('upload/images'), $imgName1);
            $docdata['image'] =  $imgName1;
        }
        if ($request->hasFile('image')) {
                
            if ($docdata->bg_image && file_exists(public_path('upload/images/' .$docdata->image))) {
                unlink(public_path('upload/images/' .$docdata->bg_image));
            }
            $imgName = time() . '.' . $request->bg_image->getClientOriginalExtension();
            $request->bg_image->move(public_path('upload/images'), $imgName);
            $docdata['image'] =  $imgName;
        }
        $docdata->update($updatedoc);
        Alert::success('Message','Doctor Inpom=rmation Updated Successfully');
        return redirect()->route('admin.show.doctor');
    }
}
