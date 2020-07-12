<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

//Models
use App\Models\Admin;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }
    
    public function loginPost(Request $request){
        if (Auth::attempt(['admin_username' => $request->username, 'password' => $request->pass])) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->withErrors('Bilgiler Hatalı');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

