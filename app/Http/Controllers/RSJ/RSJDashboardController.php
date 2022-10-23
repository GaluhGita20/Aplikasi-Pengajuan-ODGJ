<?php

namespace App\Http\Controllers\RSJ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RSJDashboardController extends Controller
{
    //
    public function index(){
        return view('backend.admin.dashboard');
    }
}
