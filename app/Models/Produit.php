<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'categorie_produit_id',
        'produits',
        'quantite_en_stock',
        'description'
    ];

    public function categorie_produit(): BelongsTo
    {
        return $this->belongsTo(CategorieProduit::class);
    }

    public function inventaires(): HasMany
    {
        return $this->hasMany(Inventaire::class);
    }

    public function resumes(): HasMany
    {
        return $this->hasMany(related: Resume::class);
    }
}
