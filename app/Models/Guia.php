<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Guia extends Model
{
    use HasFactory;

    protected $fillable = [
        "n_guia",
        "monto",
        "direccion",
        "customer_id",
        "departamento_id",
        "municipio_id"
    ];

    function customer (): BelongsTo {
        return $this->belongsTo(Customer::class);
    }

    function departamento(): BelongsTo {
        return $this->belongsTo(Departamento::class);
    }

    function municipio(): BelongsTo {
        return $this->belongsTo(Municipio::class);
    }
}
