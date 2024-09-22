<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resume extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'produit_id',
        'projet_id',
        'quantite'
    ];

    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }

    public function projet(): BelongsTo
    {
        return $this->belongsTo(Projet::class);
    }
}
