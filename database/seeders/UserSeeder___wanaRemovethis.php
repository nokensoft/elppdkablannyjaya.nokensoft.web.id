<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $table = 'users';

        DB::table($table)->insert([
            'name'          => 'Admin Master',
            'job_desc'      => 'Administrator',
            'avatar'        => 'assets/admin/assets/images/users/user-admin.jpg',
            'email'         => 'admin@gmail.com',
            'password'      => bcrypt('password'),
            'status'        => '1',
        ]);

        DB::table($table)->insert([
            'name'          => 'Admin Master',
            'job_desc'      => 'Administrator',
            'avatar'        => 'assets/admin/assets/images/users/user-admin.png',
            'email'         => 'admin.master@gmail.com',
            'password'      => bcrypt('admin.master@gmail.com'),
            'status'        => '1',
        ]);

        // DB::factory(10)->create();

    }
}
