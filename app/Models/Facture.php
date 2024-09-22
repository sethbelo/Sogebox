<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Facture extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'commande_id',
        'client_id',
        'date_paiement',
        'montant',
        'statut'
    ];

    public function commande(): BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
