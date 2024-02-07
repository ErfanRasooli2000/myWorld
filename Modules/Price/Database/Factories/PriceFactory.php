<?php

namespace Modules\Price\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Price\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->numberBetween(1000000 , 10000000);

        return [
            'price' => $price,
            'discounted_price' => $price * $this->faker->numberBetween(30,70)
        ];
    }
}
