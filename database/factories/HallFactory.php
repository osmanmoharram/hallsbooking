<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HallFactory extends Factory
{
    // Name
    // Description
    // rating
    // Location
    // Space
    // For
    // Capacity
    // Price
    // Photos

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(1, 5),
            'location' => $this->faker->address(),
            'space' => $this->faker->numberBetween(150, 400) . 'x' . $this->faker->numberBetween(150, 400),
            'for' => $this->faker->randomElement(['men', 'women', 'men and women']),
            'capacity' => $this->faker->numberBetween(400, 2000),
            'price' => $this->faker->numberBetween(10000, 40000),
            'photos' => $this->faker->imageUrl()
        ];
    }
}
