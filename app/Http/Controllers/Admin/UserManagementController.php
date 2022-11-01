<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\kyc;

class UserManagementController extends Controller
{
    public function userList(){
        $landers = User::where('role','1')->orderBy('created_at', 'DESC')->paginate(20);
        $barrowers = User::where('role','2')->orderBy('created_at', 'DESC')->paginate(20);

        return view('admin/userlist',compact('landers','barrowers'));
    }

    public function userDetails($id){
        $userdetails = kyc::where('user_id',base64_decode($id))->first();
      //  echo "<pre>";print_r($userdetails);exit;
        return view('admin/userdetails',compact('userdetails'));

    }
}
