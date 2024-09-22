<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id_compte_debit',
        'id_compte_credit',
        'montant',
        'description',
        'date_transaction'
    ] ;

    public function depense(): BelongsTo
    {
        return $this->belongsTo(Depense::class, 'id_compte_debit', 'id');
    }

    public function recette(): BelongsTo
    {
        return $this->belongsTo(Recette::class, 'id_compte_credit', 'id');
    }
}
