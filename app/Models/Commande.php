<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Employe;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        '_id',
        'numero_commande',
        'date_commande',
        'statut',
        'prix',
        'client_id',
        'employe_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->_id = (string) Str::uuid();
        });
    }

    public static function generateOrderNumber()
    {
        // Récupère la date actuelle
        $currentDate = date('Ymd'); // Format YYYYMMDD

        // Génère un numéro aléatoire de 6 chiffres
        $randomNumber = mt_rand(100000, 999999);

        // Combine la date et le numéro aléatoire
        $orderNumber = 'ORD-' . $currentDate . '-' . $randomNumber;

        return $orderNumber;
    }


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

    public function produits(): BelongsToMany
    {
        return $this->belongsToMany(Produit::class, 'commande_produits', 'commande_id', 'produit_id');
    }
}
