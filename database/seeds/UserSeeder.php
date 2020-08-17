<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = Str::random(10);
        $user->email = Str::random(10).'@gmail.com';
        $user->email_verified_at = '2020-08-17 11:59:18';
        $user->password= Hash::make('password');
        $user->save();
    }
}
