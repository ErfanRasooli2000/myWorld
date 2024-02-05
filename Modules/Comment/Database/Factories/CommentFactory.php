<?php

namespace Modules\Comment\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Comment\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Comment\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "text" => $this->faker->text(100)
        ];
    }
}
