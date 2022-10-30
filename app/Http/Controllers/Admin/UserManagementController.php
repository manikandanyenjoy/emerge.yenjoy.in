<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    public function userList(){
        $landers = User::where('role','1')->orderBy('created_at', 'DESC')->paginate(20);
        $barrowers = User::where('role','2')->orderBy('created_at', 'DESC')->paginate(20);

        return view('admin/userlist',compact('landers','barrowers'));
    }
}
