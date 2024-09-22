<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reunion extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'date',
        'sujet'
    ];

    public function employes(): BelongsToMany
    {
        return $this->belongsToMany(Employe::class, 'participants', 'reunion_id', 'employe_id');
    }
}
