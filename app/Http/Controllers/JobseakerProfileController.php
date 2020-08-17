<?php

namespace App\Http\Controllers;

use App\JobseakerProfile;
use Illuminate\Http\Request;

class JobseakerProfileController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $JobseakerProfile = JobseakerProfile::create([
            'firstname' => $request->firstname,
            'lastname'=>$request->lastname,
            'last_job_title'=>$request->last_job_title,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'home_phone'=>$request->home_phone,
            'address'=>$request->address,
            'Postcode'=>$request->postcode,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth
        ]);

        return response()->json($JobseakerProfile, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
