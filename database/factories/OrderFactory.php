<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\OrderStatus;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Config;
use App\User;

$factory->define(Order::class, function (Faker $faker) {
    $status = OrderStatus::where(
        'name',
        '=',
        Config::get('constants.db.order_statuses.In_process')
    )->first();
    return [
        'status_id'=>$status->id,
        //'user_id'=>$id_user->id,
        'country' => $faker->country,
        'city' => $faker->lastName,
        'address' => $faker->address,
        'total_prise' =>$faker->randomFloat(2, 50, 500),
    ];
});
