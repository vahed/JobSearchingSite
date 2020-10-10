<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JWTAuth;


class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @test
     */
    public function a_user_can_edit_his_profile()
    {
        $user = User::first();

        $token = JWTAuth::fromUser($user);
        $attributes = ['name' => $this->faker->name];
        $this->patchJson('api/user/profile', $attributes, ['authorization' => "bearer $token"])
            ->assertStatus(200);

        $this->assertDatabaseHas($user->getTable(), array_merge($attributes, [
            'id' => $user->id
        ]));
    }
}
