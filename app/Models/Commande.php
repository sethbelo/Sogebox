<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'date_commande',
        'client_id',
        'employe_id'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }

    public function projets(): HasMany
    {
        return $this->hasMany(Projet::class);
    }

    public function factures(): HasMany
    {
        return $this->hasMany(Facture::class);
    }
}
