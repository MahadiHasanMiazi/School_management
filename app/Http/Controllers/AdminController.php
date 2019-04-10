<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Admin;
use App\Classes;
use App\Sections;
use App\Student_fees;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function getRegistration(){
        return view('admin.registration');
    }
    public function postRegistration(Request $request){
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmPassword = $request->input('password_confirmation');



        $this
            ->validate($request,[
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:admins,email',
            'password'   => 'required',
            'password_confirmation' => 'required|same:password'
        ]);


        $admin = new Admin();

        $admin->name = $firstName ." ". $lastName;
        $admin->email = $email;
        $admin->password = Hash::make($password);

        if($admin->save()){
            return "done";
        }else{
            return "failed";
        }
    }

    public function get_student_fee(){
        $className = Classes::all();
        return view('student-teacher-cost.student-fee')->with('classNames', $className)
            ->with('errorMessage', "");
    }

    public function studentClass(Request $request){
//        return $request->classValue;
//        var_dump($request.classValue);
        $sections = Sections::where('class_id', $request->classValue)->get();
        return $sections;
    }

    public function post_student_fees(Request $request){
        $class = $request->input('selectClass');
        $section = $request->input('selectSection');
        $month = $request->input('month');
        $roll_no = $request->input('roll_number');
        $name = $request->input('student_name');
        $amount = $request->input('amount_of_fees');
        $year = $request->input('year');


        $this->
            validate($request, [
            'selectClass'    => 'required',
            'selectSection'  => 'required',
            'month'          => 'required',
            'roll_number'    => 'required',
            'student_name'   => 'required',
            'amount_of_fees' => 'required',
            'year'           => 'required'

        ]);

        $className = Classes::findOrFail($class);
        $sectionName = Sections::findOrFail($section);
//
        $checkingRoll = Student_fees::where('class', $className->name)
            ->where('section', $sectionName->name)
            ->where('month_of_fees', $month)
            ->where('year', $year)
            ->where('roll_number', $roll_no)
            ->first();

        if($checkingRoll){
            $errorMessage = "Fees already done before!";
            $className = Classes::all();
//            return view('student-teacher-cost.student-fee')->with('errorMessage', 'Already Done!');
            return view('student-teacher-cost.student-fee')->with('classNames', $className)->with('errorMessage', $errorMessage);
        }else{
            $fees = new Student_fees();
            $fees->roll_number = $roll_no;
            $fees->name = $name;
            $fees->class = $className->name;
            $fees->section = $sectionName->name;
            $fees->month_of_fees = $month;
            $fees->year = $year;
            $fees->amount = $amount;

            if($fees->save()){
                return redirect()->route('home.index');
            }else{
                return view('student-teacher-cost.student-fee')->with('notice', 'Could not submit');
            }
        }


    }

    public function office_cost(){
        return view('admin.cost');
    }

}


