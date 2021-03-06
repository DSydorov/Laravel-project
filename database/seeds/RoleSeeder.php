<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'Customer'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
