<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function index(){
        return view('frontend.home');
    }

    public function login(){
        return view('temp-auth.login');
    }

    public function register(){
        return view('temp-auth.register');
    }


}
