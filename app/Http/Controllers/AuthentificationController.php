<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentificationController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function handleLogin(RequestAuth $req){
        $credentials = $req->only(['email','password']);
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('error_msg',"wrong email or password");
        }
    }
}
