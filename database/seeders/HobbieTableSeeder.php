<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hobbie;

class HobbieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hobbie::class, 100)->create();
    }
}
