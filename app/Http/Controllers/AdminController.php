<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Admin;
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

}


