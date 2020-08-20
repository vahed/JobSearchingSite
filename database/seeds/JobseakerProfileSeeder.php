<?php

use Illuminate\Database\Seeder;
use App\JobseakerProfile;

class JobseakerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $js = new JobseakerProfile;
        //$js->user_id = 1;
        $js->firstname = "Brian";
        $js->lastname = "Jake";
        $js->last_job_title = 'programmer';
        $js->email = 'Myemail@yahoo.com';
        $js->mobile= '0756698798';
        $js->home_phone = '02075566666';
        $js->address = 'My address';
        $js->Postcode = 'w3 7hk';
        $js->gender = 'Male';
        $js->date_of_birth = '1988-06-28';
        $js->save();
    }
}
