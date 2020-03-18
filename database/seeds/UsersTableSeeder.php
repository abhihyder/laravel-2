<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\User::class, 3)->create();
    //    \App\Models\User::create([
    //        'userName'   =>'abhihyder',
    //        'email'      =>'abhihyder@gmail.com',
    //        'password'   => md5('123456')
    //    ]);
    }
}
