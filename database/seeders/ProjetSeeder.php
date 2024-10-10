<?php

namespace Database\Seeders;

use App\Models\Projet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    public function run(): void
    {
        Projet::factory(100)->create();
    }
}
