<?php

namespace Database\Factories;

use App\Models\Comments;
use App\Models\User;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{
    protected $model = Comments::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? 1,
            'post_id' => Posts::inRandomOrder()->first()->id ?? 1,
            'content' => $this->faker->sentence(10),
        ];
    }
}
