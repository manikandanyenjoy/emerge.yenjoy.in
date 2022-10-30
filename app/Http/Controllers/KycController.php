<?php

namespace App\Http\Controllers;

use App\Models\kyc;
use Illuminate\Http\Request;

class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        ]);
        // $save = new Contact;
 
        // $save->name = $request->name;
        // $save->email = $request->email;
        // $save->message = $request->message;
 
        // $emp->save();
 
        return redirect('home')->with('status', 'Ajax Form Data Has Been validated and store into database');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
