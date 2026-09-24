<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        
        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);
        if ($authenticated){
            return redirect()->route('Home');
        } else {
            return redirect()->route('login-index')->withErrors(['error' => 'email ou senha inválidos']);
            }
    }

}