<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Role;
use App\User;
use App\Order;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Faker\Provider\ro_RO\PhoneNumber as FakerPhone;


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

$factory->define(User::class, function (Faker $faker, $id_user) {
    $role = Role::where(
        'name',
        '=',
        Config::get('constants.db.roles.customer')
    )->first();

    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'role_id' => $role->id,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'birthday' =>$faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
        'password' => $faker->password(8, 20), // password
        'phone' => FakerPhone::tollFreePhoneNumber(),
        'remember_token' => Str::random(10),
    ];
});
