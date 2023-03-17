<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin Master',
            'job_desc' => 'Administrator',
            'avatar' => 'ssets/admin/assets/images/users/user-admin.jpg',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'status' => '1',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Janzen Faidiban',
            'job_desc' => 'Administrator',
            'avatar' => 'ssets/admin/assets/images/users/user-janzen.jpg',
            'email' => 'janzen@gmail.com',
            'password' => bcrypt('janzen@gmail.com'),
            'status' => '1',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Samuel Bosawer',
            'job_desc' => 'Administrator',
            'avatar' => 'ssets/admin/assets/images/users/user-samuel.jpg',
            'email' => 's.bos@gmail.com',
            'password' => bcrypt('s.bos@gmail.com'),
            'status' => '1',
        ]);


        //   \App\Models\Slider::factory(10)->create();

        // \App\Models\Slider::factory()->create([
        //     'title' => $this->faker->sentence(5),
        //     'subtitle'  => $this->faker->sentence(100),
        //     'image' => $this->faker->imageUrl(640, 480, 'cats', true),
        //     'status' => $this->faker->randomElement(['1', '0']),
        // ]);
    }
}
