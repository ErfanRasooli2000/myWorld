<?php

namespace Modules\Post\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Post\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Post\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->name,
            "text" => $this->faker->realTextBetween(800,12000),
        ];
    }
}
