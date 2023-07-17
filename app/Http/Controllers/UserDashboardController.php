<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index(){
        if (Auth::check() && Auth::user()->status == 2) {
            return view('user.dashboard');
        }
        Auth::logout();
        return redirect()->route('login');
    }
}
