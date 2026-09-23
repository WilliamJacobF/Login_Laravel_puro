<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        
        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);
        if (!$authenticated){
            return redirect()->route('login-index')->withErrors(['error' => 'email ou senha invalídos']);
        }

        return redirect()->route('login-index')->with('success', 'logado fi');
    }

}