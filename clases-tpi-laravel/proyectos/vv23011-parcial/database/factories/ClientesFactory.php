<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'telefono' => fake()->phoneNumber(),
            'id_tipo_cliente' => fake()->numberBetween(1,10),
            'departamentos_id' => fake()->numberBetween(1,10)
        ];
    }
}
