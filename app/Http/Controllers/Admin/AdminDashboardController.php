<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function index(){
        return view('backend.admin.dashboard');
    }

    public function form(){
        return view('backend.admin.form');
    }
}
