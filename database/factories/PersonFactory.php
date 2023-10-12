<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_title_id' => rand(1, 3),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
        ];
    }
}
