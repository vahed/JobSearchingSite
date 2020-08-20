<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Factory;
use PHPUnit\Framework\TestCase;
use App\JobseakerProfile;
use App\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class JobseakerProfileTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAProductHasAName(){
        //$this->withoutExceptionHandling();
        //factory(User::class, 2)->create();
        //$factory = factory(App\User::class)->make();
        //$this->assertNotEmpty($factory->name);
        /*$factory->define(User::class, function (Faker $faker) {
            return [
                'email' => $faker->unique()->safeEmail,
            ];
        });*/

    }
}
