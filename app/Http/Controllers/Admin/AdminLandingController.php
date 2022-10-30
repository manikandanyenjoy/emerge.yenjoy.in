<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLandingController extends Controller
{

    public function adminRegister(){

        $data = "admin";
        return view('auth/register',compact('data'));
    }


    public function adminLogin(){
        $data = "admin";
        return view('auth/login',compact('data'));
    }
}
