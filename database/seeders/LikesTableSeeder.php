<?php

namespace Database\Seeders; // ✅ Seeders viết hoa đúng chuẩn

use Illuminate\Database\Seeder;
use App\Models\Likes; // ✅ Đảm bảo bạn có model Likes trong App\Models

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Likes::factory()->count(10)->create(); // ✅ Dùng factory() đúng chuẩn Laravel 8+
    }
}
