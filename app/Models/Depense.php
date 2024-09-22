<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depense extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'compte_id',
        'description',
        'montant',
        'date_depense',
        'categorie',
    ];

    public function compte(): BelongsTo
    {
        return $this->belongsTo(Compte::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'id_compte_debit', 'id');
    }
}
