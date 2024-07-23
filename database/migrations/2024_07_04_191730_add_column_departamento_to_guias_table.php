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
        Schema::table('guias', function (Blueprint $table) {
            
            $table->unsignedBigInteger("departamento_id")->nullable()->after("customer_id");
            $table->foreign("departamento_id")
                    ->references("id")
                    ->on("departamentos");
            
            $table->unsignedBigInteger("municipio_id")->nullable()->after("departamento_id");
            $table->foreign("municipio_id")
                    ->references("id")
                    ->on("municipios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guias', function (Blueprint $table) {
            //
        });
    }
};
