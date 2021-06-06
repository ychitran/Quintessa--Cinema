<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'administrator',
            'salary' => '18000000',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'manager',
            'salary' => '10000000',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'sales',
            'salary' => '6000000',
        ]);
    }
}
