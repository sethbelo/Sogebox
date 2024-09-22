<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conge extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'employe_id',
        'date_debut',
        'date_fin',
        'motif'
    ] ;

    public function employe(): BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }
}
