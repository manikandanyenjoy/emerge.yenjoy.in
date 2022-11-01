<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kyc;
use App\View\Components\FlashMessages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    use FlashMessages;
    
     
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $currectuser = Auth::user()->id;
        $kyc = kyc::where('user_id',$currectuser)->first(); 
        // echo "here <pre>";print_r($kyc);exit;
        
        // self::info('Just a plain message.');
        // self::success('Item has been added.');
        // self::warning('Service is currently under maintenance.');
        // self::danger('An unknown error occured.');
      
        return view('home',compact('user','kyc'));
    }

    public function borrowerDashboard()
    {
        return view('borrowerHome');
    }
}
