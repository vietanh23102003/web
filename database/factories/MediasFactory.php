<?php

namespace Database\Factories;

use App\Models\Medias;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediasFactory extends Factory
{
    protected $model = Medias::class;

    public function definition()
    {
        return [
            'post_id' => Posts::inRandomOrder()->first()->id ?? 1,
            'user_id' => User::inRandomOrder()->first()->id ?? 1,
            'type' => $this->faker->randomElement([0, 1]),
            'link' => $this->faker->imageUrl(640, 480, 'nature'),
        ];
    }
}
