<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Student_fees;

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

    public function students_fees_list(Request $request, $class){
        $fees = Student_fees::where('class', $class);
        return view('student.students-fees-list')
            ->with('fees', $fees)
            ->with("start_date", "")
            ->with("end_date", "");
    }
    public function students_fees_list_search_by_date(Request $request){
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $fees = Student_fees::whereBetween('date', [$start_date, $end_date]);
        return view('student.students-fees-list')
            ->with('fees', $fees)
            ->with("start_date", $start_date)
            ->with("end_date", $end_date);
    }
}
