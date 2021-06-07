<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name' => 'Phan Nguyễn Hoài Nguyên',
            'email' => 'nguyen@email.com',
            'password' => bcrypt('123123'),
            'avatar' => null,
            'phone_number' => '0123456789',
            'cinema_point' => null,
            'role_id' => 1
        ]);
    }
}
