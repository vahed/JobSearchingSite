<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JobseakerProfile;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\JobseakerProfile::class, function (Faker $faker) {
    return [
        'firstname'=>$faker->firstName,
        'lastname'=>$faker->lastName,
        'last_job_title'=>Str::random(10),
        'email'=>$faker->email,
        'mobile'=>$faker->phoneNumber,
        'home_phone'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'Postcode'=>$faker->postcode,
        'gender'=>Str::random(5),
        'date_of_birth'=>'2020-06-28',
    ];
});

