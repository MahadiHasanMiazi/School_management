<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('teacher.index')->with('teachers', $teachers);

    }

    public function get_add_teacher(){
        return view('teacher.add-teacher');
    }

    public function post_add_teacher(Request $request){
        $teacher = new Teacher();

        $teacher->name =  $request->input('teacher_name');
        $teacher->subject =  $request->input('subject');
        $teacher->dob =  $request->input('dob');
        $teacher->nid =  $request->input('nid');
        $teacher->salary =  $request->input('monthly_salary');
        $teacher->mobile =  $request->input('mobile_number');
        $teacher->gender =  $request->input('gender');

        if($teacher->save()){
            return redirect()->route('home.index');
        }else{
            return view('teacher.add-teacher');
        }

    }
}
