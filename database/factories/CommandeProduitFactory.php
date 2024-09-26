<?php

namespace Database\Factories;

use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeProduitFactory extends Factory
{
    public function definition(): array
    {
        return [
            'commande_id' => Commande::factory(),
            'produit_id' => Produit::factory()
        ];
    }
}
