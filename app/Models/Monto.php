<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Monto extends Model
{
    use HasFactory;

    protected $fillable = ["monto_total", "customer_id"];

    function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }
}
