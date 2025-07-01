<?php

namespace Database\Factories;

use App\Models\Likes;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikesFactory extends Factory
{
    protected $model = Likes::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? 1,
            'post_id' => Posts::inRandomOrder()->first()->id ?? 1,
        ];
    }
}
