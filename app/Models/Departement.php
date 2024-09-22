<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'libelle'
    ] ;

    public function employes(): HasMany
    {
        return $this->hasMany(Employe::class);
    }
}
