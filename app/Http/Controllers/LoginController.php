<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function storeLogin(Request $request){
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenreate();
            return redirect()->intended('/');
        }
    }
}
