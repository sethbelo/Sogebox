<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projet extends Model
{

    use HasFactory, HasUuids;
    protected $fillable = [
        'commande_id',
        'temps',
        'resume',
        'statut',
        'date_echeance'
    ];

    public function resumes(): HasMany
    {
        return $this->hasMany(Resume::class);
    }

    public function commande(): BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }

    public function livraisons(): HasMany
    {
        return $this->hasMany(Livraison::class);
    }

    public function sous_traitances(): HasMany
    {
        return $this->hasMany(SousTraitance::class);
    }

    public function taches(): HasMany
    {
        return $this->hasMany(Tache::class);
    }

}
