<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Posts;

class PostsFactory extends Factory
{
    protected $model = Posts::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // hoặc fake user ID
            'content' => $this->faker->text(200),
            'has_medias' => false,
        ];
    }
}
