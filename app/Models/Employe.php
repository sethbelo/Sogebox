<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employe extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'genre',
        'etat_civil',
        'nationalite',
        'date_naissance',
        'adresse_physique',
        'telephone',
        'date_embauche',
        'salaire',
        'poste',
        'departement_id'
    ];

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }

    public function rapports(): HasMany
    {
        return $this->hasMany(Rapport::class);
    }

    public function paiments(): HasMany
    {
        return $this->hasMany(Paiement::class);
    }

    public function pointings(): HasMany
    {
        return $this->hasMany(Pointing::class);
    }

    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }

    public function taches(): HasMany
    {
        return $this->hasMany(Tache::class);
    }

    public function conges(): HasMany
    {
        return $this->hasMany(Conge::class);
    }

    public function reunions(): BelongsToMany
    {
        return $this->belongsToMany(Reunion::class, 'participants', 'employe_id', 'reunion_id');
    }

    public function bons(): HasMany
    {
        return $this->hasMany(Bon::class);
    }
}
