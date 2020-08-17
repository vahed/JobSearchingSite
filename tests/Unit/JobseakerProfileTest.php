<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Tests\Unit;

use Illuminate\Database\Eloquent\Factory;
use PHPUnit\Framework\TestCase;
use App\JobseakerProfile;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JobseakerProfileTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAProductHasAName(){

        $factory = factory(\User::class)->make();
        $this->assertNotEmpty($factory->name);
        /*$factory->define(User::class, function (Faker $faker) {
            return [
                'email' => $faker->unique()->safeEmail,
            ];
        });*/
    }
}
