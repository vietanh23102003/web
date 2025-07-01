<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password'), // hoặc dùng sẵn hash như bạn đã có
            'remember_token' => Str::random(10),
            'profile_id' => 1,     // bạn có thể thay bằng số ngẫu nhiên nếu bảng profile có dữ liệu
            'hobbies_id' => 1,     // tương tự
            'is_admin' => 0,          // giá trị mặc định
        ];
    }
}
