<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Admin;
use App\Classes;
use App\Sections;
use App\Student_fees;
use App\Cost;
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

        $admin->first_name = $firstName;
        $admin->last_name = $lastName;

        $admin->email = $email;
        $admin->password = Hash::make($password);

        if($admin->save()){
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'New admin successfully registered!');
            return redirect()->route('home.index');
        }else{
            return view('admin.registration');
        }
    }

    public function get_student_fee(){
        $className = Classes::all();
        return view('student-teacher-cost.student-fee')->with('classNames', $className)
            ->with('errorMessage', "");
    }

    public function studentClass(Request $request){
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
        $date = $request->input('date');


        $this->
            validate($request, [
            'selectClass'    => 'required',
            'month'          => 'required',
            'roll_number'    => 'required',
            'student_name'   => 'required',
            'amount_of_fees' => 'required',
            'year'           => 'required',
            'date'           => 'required'

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
            $fees->date = $date;

            if($fees->save()){
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'successfully done!');
                return redirect()->route('students.fees');
            }else{
                return view('student-teacher-cost.student-fee')->with('notice', 'Could not submit');
            }
        }


    }

    public function get_office_cost(){
        return view('admin.cost');
    }

    public function post_office_cost(Request $request){
        $cost_reason = $request->input('CostReason');
        $amount = $request ->input('amount');
        $date = $request->input('date');

//        var_dump(count($amount));

        for ($i = 0; $i < count($amount); $i++) {
            $cost = new Cost();
            $cost->cost_reason = $cost_reason[$i];
            $cost->amount = $amount[$i];
            $cost->date = $date[$i];
            $cost->save();
        }
        return redirect()->route('home.index');

    }


    public function cost_list(){
        $costs = Cost::orderBy('id', 'DESC')->get();
        return view('cost.costList')
            ->with('costs', $costs)
            ->with("start_date", "")
            ->with("end_date", "");

    }

    public function cost_list_search_by_date(Request $request){
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $costs  = Cost::whereBetween('date',[$start_date, $end_date]);
        return view('cost.costList')
            ->with('costs', $costs)
            ->with("start_date", $start_date)
            ->with("end_date", $end_date);
    }

    public function get_total_accounts(){
        $cost = Cost::all()->sum('amount');
        $fees = Student_fees::all()->sum('amount');
        $sum = $fees - $cost ;

        return view('admin.total-cost-profit', ['fees' => $fees])
            ->with("cost", $cost)
            ->with("sum", $sum)
            ->with("start_date", "")
            ->with("end_date", "");
    }

    public function total_account_by_date(Request $request){
        $start_date = $request->input("start_date");
        $end_date = $request->input("end_date");

        $cost = Cost::whereBetween('date', [$start_date, $end_date])->sum('amount');
        $fees = Student_fees::whereBetween('date', [$start_date, $end_date])->sum('amount');
        $sum = $fees - $cost;
//        var_dump($cost);
        return view('admin.total-cost-profit', ['fees' => $fees])
            ->with("cost", $cost)
            ->with("sum", $sum)
            ->with("start_date", $start_date)
            ->with("end_date", $end_date);

    }

    public function get_change_password(){
        return view('admin.change-password', ['message'=> ""]);
    }

    public function post_change_password(Request $request){
        $this->
            validate($request, [
                'old-pass' => 'required',
                'new-pass' => 'required',
                'con-pass' => 'required|same:new-pass'

        ],
            [
                'old-pass.required'  => 'You must give your Old password',
                'new-pass.required'  => 'New Password is missing',
                'con-pass.required'  => 'Confirm Password is missing',
                'con-pass.same'      => 'New Password & Confirm Password does not match'
            ]);

        $oldPass = $request->input('old-pass');

        $conPass = $request->input('con-pass');

        $admin = Admin::where('id', '=', $request->session()->get('admin.id'))->first();

        if(Hash::check($oldPass, $admin->password)){
            $newPass = $request->input('new-pass');
            $admin->password = Hash::make($newPass);
            if($admin->save()){
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'successfully Change your Password!');
                return redirect()->route('home.index');
            }

        }else{
            $error = "Old password is not correct";
            return view('admin.change-password', ['message'=> $error]);
        }

    }

    public function edit(Request $request){
        $admin =Admin::find($request->session()->get('admin.id'));

        return view('admin.edit')->with("admin", $admin);
    }

    public function update(Request $request){
        $firs_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');

        $admin = Admin::find($request->session()->get('admin.id'));
        $admin->first_name = $firs_name;
        $admin->last_name = $last_name;
        $admin->email = $email;

        if($admin->save()){
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Profile successfully updated!');
            return redirect()->route('home.index');
        }

    }

    public function search(Request $request){
        $cost = Cost::Where('cost_reason', 'like', '%' . $request->value . '%')
            ->orderBy('id', 'DESC')
            ->get();
        return $cost;
    }

}


