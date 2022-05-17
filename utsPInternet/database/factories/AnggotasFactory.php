<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggotas>
 */
class AnggotasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'groups_id' => rand(1,3),
            'no_telp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address()

        ];
    }
}
