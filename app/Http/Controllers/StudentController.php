<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function newStudent(){
        return view('student.add-student');
    }
    public function createStudent(Request $request){
        $student= new Students();

        $student->name = $request->input('name');
        $student->roll_no = $request->input('roll_no');
        $student->DOB = $request->input('dob');
        $student->Father_name = $request->input('father_name');
        $student->mother_name = $request->input('mother_name');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');
        $student->admission_date = $request->input('admission_date');
        $student->class_name = $request->input('className');

      if($student->save()){
          return redirect()->route('home.index');
      }
    }
}
