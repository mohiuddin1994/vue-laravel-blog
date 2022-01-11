<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cat_id' => $this->faker->randomDigit (1,10),
            'user_id' => $this->faker->randomDigit(1,10),
            'comment_id' => $this->faker->randomDigit(1,10),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
