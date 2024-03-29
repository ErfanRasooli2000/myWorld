<?php

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\User\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "mobile" => fake()->unique()->regexify('/^09\d{9}$/'),
            "is_active" => 1,
            "password" => 123456,
        ];
    }
}
