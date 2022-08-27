<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;



class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
      $doctor = new doctor;
       //Image is the name given inside teh form
      $image =$request->image;  

      $imagename =time().'.'.$image->getClientoriginalExtension();
       //Image is the name given in form
      $request->image->move('doctorimage',$imagename);
      
      $doctor->image=$imagename;
       //name is database and doctorname is form name
      $doctor->name=$request->doctorname;

      $doctor->phone=$request->phone;

      $doctor->room=$request->room;

      $doctor->speciality=$request->speciality;



      $doctor->save();

      return redirect()->back()->with('message','Doctor Added successfully');
    }

    public function showappoint()
    {

      $data=appointment::all();


      return view('admin.showappoint',compact('data'));
    }

    public function approved($id)
    {
      $data=appointment::find($id);

      $data->status='approved';

      $data->save();

      return redirect()->back();
    }

    public function canclled($id)
    {
      $data=appointment::find($id);

      $data->status='canclled';

      $data->save();

      return redirect()->back();


    }

    public function showdoctor()
    {
      $data = doctor::all();
      return view('admin.showdoctor',compact('data'));
    }

    public function deletedoctor($id)
    {
       $data=doctor::find($id);

       $data->delete();
        
       return redirect()->back();
    }

    public function updatedoctor($id)
    {
      
      $data = doctor::find($id);
      return view('admin.updateDoctor',compact('data'));
    }

    public function editdoctor(REQUEST $request,$id)
    {
       $doctor = doctor::find($id);

       $doctor->name=$request->doctorname;

       $doctor->phone=$request->phone;

       $doctor->speciality=$request->speciality;

       $doctor->room=$request->room;
       $image = $request->file;

       
       
       $image =$request->image;  
       if($image)
      {

        $imagename =time().'.'.$image->getClientoriginalExtension();
         //Image is the name given in form
        $request->image->move('image',$imagename);
        
        $doctor->image=$imagename;
      }
       $doctor->save();

       return redirect('/showdoctor')->with('message','details updated successfully');
    }
}
