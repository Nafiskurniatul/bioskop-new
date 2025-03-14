<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.admin_dashboard');
    }

    public function logout() {
        Auth::logout();
        return Redirect()->route('login');
    }
}
