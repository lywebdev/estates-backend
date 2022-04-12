<?php

namespace Database\Factories\Estate;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(3),
            'price' => $this->faker->numberBetween(1500000, 70000000),
            'estate_category_id' => $this->faker->numberBetween(1, 4),
            'description' => $this->faker->sentence(50),
            'city' => $this->faker->city(),
            'district' => $this->faker->streetName(),
            'location' => $this->faker->streetAddress(),
            'area' => $this->faker->numberBetween(10, 150),
            'living_area' => $this->faker->numberBetween(10, 100),
            'room_size' => $this->faker->numberBetween(1, 7),
            'year' => $this->faker->year(),
            'parking' => $this->faker->randomElement([true, false]),
            'bathroom' => $this->faker->randomElement([true, false]),

            'map_coords' => $this->faker->latitude($min = -90, $max = 90) . "," . $this->faker->longitude($min = -180, $max = 180),
            'map_address' => $this->faker->address()
        ];
    }
}
