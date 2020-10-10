<?php

namespace Tests\Unit;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\JobseakerProfile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

/*class ProfileTest extends TestCase
{
    use RefreshDatabase; //refresh migrate tables
    protected $jobseakerProfile;

    /*public function setUp():void{
        parent::setUp();
        $this->jobseakerProfile = factory(JobseakerProfile::class)->create();
        $this->actingAs($this->jobseakerProfile, 'api');
    }*/
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /*public function test_can_create_task()
    {
        $factory = factory(JobseakerProfile::class)->create();
        $this->actingAs($factory,'api');

        $formData =[
            'firstname'=>'first name',
            'lastname'=>'last name',
            'last_job_title'=>'last job title',
            'email'=>'myemail@yahoo.com',
            'mobile'=>'075675765765',
            'home phone'=>'0207777777',
            'address'=>'my address',
            'Postcode'=>'w5 9bb',
            'gender'=>'Male',
            'date_of_birth'=>'05-08-2020'
            ];
        $this->withoutExceptionHandling();
        $this->json('POST',route('JobSeakerProfile.store'),$formData)
            ->assertStatus(200);
        $this->json('POST', route('JobSeakerProfile.store'), $formData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJson([
                "jobSeakerProfile" => [
                    'firstname'=>'first name',
                    'lastname'=>'last name',
                    'last_job_title'=>'last job title',
                    'email'=>'myemail@yahoo.com',
                    'mobile'=>'075675765765',
                    'home phone'=>'0207777777',
                    'address'=>'my address',
                    'Postcode'=>'w5 9bb',
                    'gender'=>'Male',
                    'date_of_birth'=>'05-08-2020'
                ],
                "message" => "Created successfully"
            ]);
    }
}*/
