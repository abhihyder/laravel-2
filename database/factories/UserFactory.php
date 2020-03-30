<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'user'      => $faker->unique()->userName,
        'email'     => $faker->unique()->safeEmail,
        'password'  => md5('123456'), // password
        'gender'    => $faker->randomElement(['Male', 'Female', 'Others']), 
        'birthday'  =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'photo'     =>$faker->unique()->imageUrl(),
        'email_verified'=>1,
        'email_verified_at'=> now()->subDay(10),
        'email_verification_token'=>'',
        'last_login'=> now()->subDay(7),

    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $category=$faker->unique()->name;
    $slug=Str::slug($category);
    return [
        'name'   => $category,
        'slug'   => $slug,
        'status' => random_int(0,1),
    ];
});

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'user_id'=> random_int(1,3),
        'category_id'=> random_int(1,3),
        'title' => $faker->realText(60),
        'content' => $faker->realText(),
        'thumbnail_image' => $faker->imageUrl(),

    ];
});
