<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bon extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'motif',
        'montant',
        'employe_id',
        'type_bon_id'
    ];

    public function type_bon(): BelongsTo
    {
        return $this->belongsTo(TypeBon::class);
    }

    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }

    public function approbations(): HasMany
    {
        return $this->hasMany(Approbation::class);
    }
}
