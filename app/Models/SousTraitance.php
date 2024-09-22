<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SousTraitance extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'service',
        'fournisseur',
        'projet_id'
    ];

    public function projet(): BelongsTo
    {
        return $this->belongsTo(Projet::class);
    }
}
