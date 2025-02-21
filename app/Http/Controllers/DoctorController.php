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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required'
        ]);

        $imgName=time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('upload/images'),$imgName);

        Doctor::create([
            'title'=>$request->title,
            'image'=>$imgName,
            'description'=>$request->description
        ]);
        Alert::success('Message','Doctor Suggestion Added Successfully');
        return redirect()->route('admin.show.doctor');
        
    }
    public function editDoctor($id){
        $editdoctor=Doctor::find($id);
        return view('admin.pages.edit_doctor',compact('editdoctor'));
    }
    public function updateDoctor(Request $request, $id){
        $updatedoc=$request->validate([
            'title'=>'required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
            'description'=>'required'
        ]);
        $docdata=Doctor::find($id);
        
        if ($request->hasFile('image')) {
                
            if ($docdata->image && file_exists(public_path('upload/images/' .$docdata->image))) {
                unlink(public_path('upload/images/' .$docdata->image));
            }
            $imgName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/images'), $imgName);
            $updatedoc['image'] =  $imgName;
        }
       
        $docdata->update($updatedoc);
        Alert::success('Message','Doctor Information Updated Successfully');
        return redirect()->route('admin.show.doctor');
    }
}
