<?php

namespace Database\Seeders; // 

use Illuminate\Database\Seeder;
use App\Models\Comments; // 

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comments::factory()->count(10)->create(); // 
    }
}
