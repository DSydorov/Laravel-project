<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Role;

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

$factory->define(User::class, function (Faker $faker) {
    $roleId = Role::where('name', '=', 'Customer')->first()->id;
    return [
        'name' => $faker->name,
        'surname' => $faker->LastName,
        'role_id' => $roleId ? $roleId : 1,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'birthday' =>$faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
        'password' => $faker->password(8), // password
        'phone' => $faker->phoneNumber,
        'remember_token' => Str::random(10),
    ];
});
