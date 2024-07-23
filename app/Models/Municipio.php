<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;

    function departamento (): BelongsTo {
        return $this->belongsTo(Departamento::class);
    }

    function guias(): HasMany {
        return $this->hasMany(Guia::class);
    }
}
