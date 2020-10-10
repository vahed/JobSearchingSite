<?php

namespace Tests\Feature;

use App\JobseakerProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

/*class JobseakerProfileTest extends TestCase
{
    //use DatabaseMigrations;
    //use RefreshDatabase;

    public function test_can_create_jobseakerProfile() {

        $data = [
            'id'=> 1,
            'firstname'=>'Vahed',
            'lastname'=>'Safizadeh',
            'last_job_title'=>'Programmer',
            'email'=>'vahed@yahoo.com',
            'mobile'=>'0325234234',
            'home_phone'=>'020798798798',
            'address'=>'150 High street',
            'Postcode'=>'w3',
            'gender'=>'Male',
            'date_of_birth'=>'1970-06-28',
        ];

        $this->post('jobseakerProfile', $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
    public function test_can_update_jobseakerProfile() {

        $jobseakerProfile = factory(JobseakerProfile::class)->create();
        $gender = $this->faker->randomElement(['male', 'female']);
        $data = [
            'firstname'=>$this->faker->firstName,
            'lastname'=>$this->faker->lastName,
            'last_job_title'=>$this->faker->jobtitle,
            'email'=>$this->faker->email,
            'mobile'=>$this->faker->phoneNumber,
            'home_phone'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'Postcode'=>$this->faker->postcode,
            'gender'=>$gender,
            'date_of_birth'=>'2020-06-28'
        ];

        $this->put(route('jobseakerProfile.update', $jobseakerProfile->id), $data)
            ->assertStatus(200)
            ->assertJson(["data" => $data]);
            //->assertJsonStructure(['firstname'=>$this->faker->firstName]);
    }
}*/
