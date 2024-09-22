<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livraison extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'projet_id',
        'date_debut',
        'date_echeance',
        'adresse_livraison',
        'mode_id'
    ];

    public function projet(): BelongsTo
    {
        return $this->belongsTo(Projet::class);
    }

    public function mode_livraison(): BelongsTo
    {
        return $this->belongsTo(ModeLivraison::class);
    }
}
