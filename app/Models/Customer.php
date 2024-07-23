<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        "documentId",
        "name",
        "last_name",
        "email",
        "user_id"
    ];

    function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    function guias(): HasMany {
        return $this->hasMany(Guia::class);
    }

    function monto(): HasOne {
        return $this->hasOne(Monto::class);
    }
}
