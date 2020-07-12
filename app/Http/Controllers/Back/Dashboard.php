<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function dashboard(){
        return view('back.dashboard');
    }
}
