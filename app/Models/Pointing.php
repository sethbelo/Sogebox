<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pointing extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'employe_id',
        'date',
        'heure_arrivee',
        'heure_depart',
        'observation'
    ];

    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }
}
