<?php

namespace Tests;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /*use CreatesApplication, DatabaseMigrations;
    /protected $faker;*/

    public function setUp() :void{
        parent::setUp();//override setup & call parent function
        //$this->faker = Factory::create();

        $this->artisan('migrate');
        $this->artisan('db:seed');

        $this->withoutExceptionHandling();
    }
}
