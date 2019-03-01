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
//        return redirect()->route('home.index');


        $admin = Admin::where('email', $email)->first();
//        var_dump($admin);
////        var_dump($admin);
        if($admin){
            if(Hash::check($password, $admin->password)){
                session(['admin'=>$admin]);
                return redirect()->route('home.index');
            }else{
                echo "pass wrong";
            }

        }else{
            echo "something is Wrong";
        }

    }

}
