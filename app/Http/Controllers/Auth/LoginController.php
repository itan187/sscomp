<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }
    public function login(){
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::attempt($credentials)) {
           return redirect()->route('inicio');
        } 
        else{
        return back()->withErrors(['username' => trans('auth.failed')])
            ->withInput(request(['username']));
        }
    }
    public function showLoginForm(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
