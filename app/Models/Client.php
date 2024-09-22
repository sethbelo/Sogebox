<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nom',
        'type_client',
        'telephone',
        'adresse',
        'images'
    ];

    public function rendezvous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }

    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function factures(): HasMany
    {
        return $this->hasMany(Facture::class);
    }
}
