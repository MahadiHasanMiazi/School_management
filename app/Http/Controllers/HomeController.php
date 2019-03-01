<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'username'=>'required|email',
            'password'=>'required'
        ]);

        $email = $request->input('username');
        $password = $request->input('password');

        $admin = Admin::where('email', $email)->first();
        if($admin){
            if(Hash::check($password, $admin->password)){
                session(['admin'=>$admin]);
                return redirect()->route('home.index');
            }else{
               return 'password does not match';
            }

        }else{
            return 'user does not exist';
        }

    }

}
