<?php

namespace App\Http\Controllers\LSM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LSMDashboardController extends Controller
{
    //
    public function index(){
        return view('backend.admin.dashboard');
    }
}
