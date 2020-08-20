<?php

namespace App\Http\Controllers;

use App\JobseakerProfile;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class JobseakerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        JobseakerProfile::all();
        return response()->json(201);
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
        $jobseakerProfile = new JobseakerProfile;

        $js = $request->isMethod('put') ? $jobseakerProfile::findOrFail($request->id) : new JobseakerProfile;

        //'user_id'=> 1,
        $js->id = $request->input('id');
        $js->firstname = $request->input('firstname');
        $js->lastname = $request->input('lastname');
        $js->last_job_title = $request->input('last_job_title');
        $js->email = $request->input('email');
        $js->mobile = $request->input('mobile');
        $js->home_phone = $request->input('home_phone');
        $js->address = $request->input('address');
        $js->Postcode = $request->input('Postcode');
        $js->gender = $request->input('gender');
        $js->date_of_birth = $request->input('date_of_birth');
        $js->save();

        return response()->json(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return JobseakerProfile::findOrFail($id);
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
    public function update(Request $request, JobseakerProfile $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobseakerProfile = JobseakerProfile::findOrFail($id);
        if($jobseakerProfile->delete()){
            return response()->json(null, 204);
        }
    }
}
