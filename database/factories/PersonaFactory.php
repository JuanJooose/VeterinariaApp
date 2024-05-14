<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->sentence(3),
            'lastname' => $this->faker->sentence(4),
            'document' => $this->faker->randomElement([600000,690000]),
            'phone' => $this->faker->randomElement([600000,690000]),
            // $this->faker->randomElement([1,5])
        ];
    }
}
