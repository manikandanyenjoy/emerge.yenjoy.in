<?php

namespace App\Http\Controllers;

use App\Models\kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\View\Components\FlashMessages;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use FlashMessages;


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'pan' => array(
                            'required',
                            'regex:/([A-Z]{5}[0-9]{4}[A-Z]{1})/u'
                        ),
            'gender' => array('required'),
            'married_status' => array('required'),
            'occupation' => array('required'),
            'address' => array('required'),
            'city' => array('required'),
            'pincode' => 'required|numeric',
        ], 
        [
            'pan.required' => 'PAN number is required',
            'pan.regex' => 'Please enter correct pan number',
            'gender.required' => 'Please choose your gender',
            'married_status.required' => 'Please choose your Married Status',
            'occupation.required' => 'Please enter your occupation',
            'address.required' => 'Please enter your address',
            'city.required' => 'Please enter your city',
            'pincode.required' => 'Please enter your pincode',
            'pincode.numeric' => 'Pincode should be in number format',
    ]);
    
        $currectuser = Auth::user()->id;
        $kyc = kyc::where('user_id',$currectuser)->first();
        if ($kyc != null) {
            $id = $kyc->id;
            $save = kyc::find($id);
            $save->user_id = $currectuser;
            $save->kyctype = $request->kyctype;
            $save->pan_number = $request->pan;
            $save->gender = $request->gender;
            $save->marital_status = $request->married_status;
            $save->occupation = $request->occupation;
            $save->city = $request->city;
            $save->pincode = $request->pincode;
        }
        else{
            
            $save = new kyc;
            $save->user_id = $currectuser;
            $save->kyctype = $request->kyctype;
            $save->pan_number = $request->pan;
            $save->gender = $request->gender;
            $save->marital_status = $request->married_status;
            $save->occupation = $request->occupation;
            $save->city = $request->city;
            $save->pincode = $request->pincode;
        }
 
        $save->save();
        self::success('KYC Form Data Has Been validated and store into database.');
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    
    public function file_submit(Request $request)
    {
        $whichFile = $request->whichFile;
        $validator = Validator::make($request->all(), [
            'myfile' =>  'required|max:10000|mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
        ]);

        // process the failure reasons
        if ($validator->fails()) {
            // echo "if <pre>";print_r($validator);exit;
            // return Redirect::to('sharks/' . $id . '/edit')
            //     ->withErrors($validator);
            self::danger('Please upload valid'.$whichFile);
            return redirect('home');
        } 
        else 
        {
            //check if file exist 
            if (request()->hasFile('myfile')){
                $uploadedImage = $request->file('myfile');
                $imageName = $uploadedImage->getClientOriginalName();
                $destinationPath = public_path('/'.$whichFile.'/');
                $uploadedImage->move($destinationPath, $imageName);
                $uploadedImage->imagePath = $destinationPath . $imageName;
            }
            $currectuser = Auth::user()->id;
            $kyc = kyc::where('user_id',$currectuser)->first();
            if ($kyc != null) {
                $id = $kyc->id;
                $save = kyc::find($id);
                $save->$whichFile = 1;
            }else{
                $save = new kyc;
                $save->$whichFile = 1;
                $save->user_id = $currectuser;
            }
            $save->save();
            self::success($whichFile.' uploaded successfully.');
        }
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function show(kyc $kyc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function edit(kyc $kyc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kyc $kyc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function destroy(kyc $kyc)
    {
        //
    }
}
