<?php

namespace App\Models;

use App\Models\Depense;
use App\Models\Recette;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compte extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nom_compte',
        'type_compte',
        'solde_initial',
        'solde_actuel'
    ];

    public function depenses(): HasMany
    {
        return $this->hasMany(Depense::class);
    }

    public function recettes(): HasMany
    {
        return $this->hasMany(Recette::class);
    }
}
