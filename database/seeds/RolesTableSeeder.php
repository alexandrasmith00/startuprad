<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Student']);
        Role::create(['name' => 'TF']);
        Role::create(['name' => 'Professor']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Contributor']);

    }
}