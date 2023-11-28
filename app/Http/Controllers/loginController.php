<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class loginController extends Controller
{
    //
    function index(){
        return view("login");
    }

    function checklogin(Request $request){
        $this->validate($request,[
            "email"=> "required|email",
            "password"=> "required|alpha_num|min:3"
        ]);

        $user_data = array(
            'email'=> $request->get('email'),
            'password'=> $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('main/successlogin');
        }
        else{
            return back()->with('error','Wrong Login Details');
        }
    }

    function successlogin(){
        return view('dash');
    }

    function logout(){
        Auth::logout();
        return redirect('main');
    }
}
?>
