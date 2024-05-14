<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientesAsociado>
 */
class ClientesAsociadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'persona_id' => $this->faker->randomElement([1,5]),
            'cliente_id' => $this->faker->randomElement([1,5]),

        ];
    }
}
