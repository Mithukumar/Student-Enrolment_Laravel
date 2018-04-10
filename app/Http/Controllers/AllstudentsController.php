<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect; 
use Session;
session_start();

class AllstudentsController extends Controller
{
    public function allstudent(){
    
    $allstudent_info = DB::table('student_tbl')->get();
    $manage_student = view('admin.allstudent')->with('all_student_info',$allstudent_info);
    return view('layout')->with('allstudent',$manage_student);

      //return view('admin.allstudent');

   }
   
    public function studentdelete($student_id){
    	DB::table('student_tbl')
    	->where('student_id',$student_id)->delete();
    	return redirect('/allstudent');

  }
 //Student view part//
  public function studentview($student_id){

  	$student_description_view=DB::table('student_tbl')
                      ->select('*')
                      ->where('student_id',$student_id)
                      ->first();

           $manage_description_student=view('admin.studentview')
                      ->with('student_description_profile',$student_description_view);
      return view('layout')
                 ->with('studentview',$manage_description_student); 
  }

  public function studentedit($student_id){

    $student_description_view=DB::table('student_tbl')
                      ->select('*')
                      ->where('student_id',$student_id)
                      ->first();

          $manage_description_student=view('admin.student_edit')
                      ->with('student_description_profile',$student_description_view);
      return view('layout')
                 ->with('student_edit',$manage_description_student); 

  }

  //Update Part//

  public function studentupdate(Request $request,$student_id){

    $data=array();
    $data['student_name'] = $request->student_name;
    $data['student_roll'] = $request->student_roll;
    $data['student_fathersname'] = $request->student_fathersname;
    $data['student_mothersname'] = $request->student_mothersname;
    $data['student_email'] = $request->student_email;
    $data['student_phone'] = $request->student_phone;
    $data['student_address'] = $request->student_address;
    $data['student_password'] = $request->student_password;
    $data['student_admissionyear'] = $request->student_admissionyear;

    DB::table('student_tbl')
    ->where('student_id',$student_id)
    ->update($data);

    session::put('message','Student Info Update Successfully');
    return redirect::to('/allstudent');
  }
}
