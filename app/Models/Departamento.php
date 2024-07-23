<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    use HasFactory;

    function municipios(): HasMany {
        return $this->hasMany(Municipio::class);
    }

    function guia(): HasMany {
        return $this->hasMany(Guia::class);
    }
}
