<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiement extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'employe_id',
        'date',
        'resume',
        'motif_paiement_id'
    ];

    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }

    public function motif_paiement(): BelongsTo
    {
        return $this->belongsTo(MotifPaiement::class);
    }
}
