<?php

use Illuminate\Database\Seeder;

class OrdersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Order::class, 5)->create();
    }
}
