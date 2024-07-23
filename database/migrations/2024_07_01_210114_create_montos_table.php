<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('montos', function (Blueprint $table) {
            $table->id();

            $table->float("monto_total");
            
            $table->unsignedBigInteger("customer_id")->unique();
            $table->foreign("customer_id")->references("id")->on("customers");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('montos');
    }
};
