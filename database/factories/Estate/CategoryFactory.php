<?php

namespace Database\Factories\Estate;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word($this->faker->numberBetween(1, 2)),
            'text' => $this->faker->word($this->faker->numberBetween(1, 5))
        ];
    }
}
