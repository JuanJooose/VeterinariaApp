<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lastname' => $this->faker->sentence(3),
            'bankAccount' => $this->faker->randomElement([600000,690000]),
            'address' => $this->faker->sentence(3),
            'phone' => $this->faker->randomElement([600000,690000]),
        ];
    }
}
