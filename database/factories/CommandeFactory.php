<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'numero_commande' => Commande::generateOrderNumber(),
            'date_commande' => $this->faker->date(),
            'statut' => $this->faker->randomElement(['livrée', 'annulée', 'en attente']), // Statut aléatoire
            'client_id' => \App\Models\Client::factory(), // Utilisation de la factory de Client
            'employe_id' => \App\Models\Employe::factory(), // Utilisation de la factory de Employe
        ];
    }
}
