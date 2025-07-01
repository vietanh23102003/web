<?php

namespace Database\Seeders; // Chữ S phải viết hoa đúng chuẩn PSR-4

use Illuminate\Database\Seeder;
use App\Models\Posts;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        Posts::factory()->count(10)->create();
    }
}
