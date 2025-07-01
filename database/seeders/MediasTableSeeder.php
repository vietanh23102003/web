<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medias;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medias::factory()->count(10)->create();
    }
}
