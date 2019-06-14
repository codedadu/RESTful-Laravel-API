<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "Rusydi Faridi";
        $user->email = "rusydi@rbs.sch.id";
        $user->password = Hash::make("224423223");
        $user->api_token = str_random(100);
        $user->save();
    }
}
