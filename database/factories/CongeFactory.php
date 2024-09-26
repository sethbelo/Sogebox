<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CongeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'employe_id' => \App\Models\Employe::factory(), // Utilisation de la factory de Employe
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'motif' => $this->faker->sentence(),
        ];
    }
}
