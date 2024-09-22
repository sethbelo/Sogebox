<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['client_id'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
