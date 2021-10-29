<?php

namespace Database\Seeders;

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
//         \App\Models\User::factory(10)->create();
//         \App\Models\Category::factory(10)->create();
////         \App\Models\Client::factory(10)->create();
//         \App\Models\Comment::factory(10)->create();
//         \App\Models\Cv::factory(10)->create();
         \App\Models\Portfolio::factory(10)->create();
//         \App\Models\Post::factory(10)->create();
    }
}
