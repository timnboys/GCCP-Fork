<?php

use Illuminate\Database\Seeder;

class TestUserCreator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $test = new \App\User();
        $test->name = "Test User";
        $test->email = "test@test.com";
        $test->password = \Illuminate\Support\Facades\Hash::make('password');
        $test->save();

    }
}
