<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\LikesTableSeeder;
use Database\Seeders\CommentsTableSeeder;
use Database\Seeders\MediasTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(10)->create();

        $this->call([
            PostsTableSeeder::class,
            LikesTableSeeder::class,
            CommentsTableSeeder::class,
            MediasTableSeeder::class,
        ]);
    }
}
