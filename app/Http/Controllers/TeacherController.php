<?php

namespace App\Http\Controllers;

use App\Cost;
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

    public function delete(Request $request, $id){
        $teacher = Teacher::find($id);
        return view('teacher.delete-confirmation-modal')->with('teacher', $teacher);
    }

    public function confirm_delete(Request $request, $id){
        $teacher = Teacher::find($id);
        if($teacher->delete()){
            return redirect()->route('teacher.index');
        }else{
            return view('teacher.delete-confirmation-modal');
        }
    }

    public function details(Request $request, $id){
        $teacher = Teacher::find($id);
        return view('teacher.details')->with('teacher', $teacher);
    }

    public function giveSalary(Request $request, $id){
        $teacher = Teacher::find($id);

        $amount = $request->input('salary');
//        var_dump($amount);
        $salary = new Cost();
        $salary -> cost_reason = $teacher->name . "(Salary)";
        $salary -> amount =  $amount;
        $salary -> date =  date("Y-m-d");
        if($salary->save()) {
            return redirect()->route('teacher.details', $teacher->id);
        }


    }
}
