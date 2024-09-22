<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Approbation extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'validation',
        'date',
        'bon_id'
    ];

    public function bon(): BelongsTo
    {
        return $this->belongsTo(Bon::class);
    }
}
