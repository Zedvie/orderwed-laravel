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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->date('legalization_date')->comment('fecha legalizacion');
            $table->string('addres', 50)->comment('direccion');
            $table->string('city', 50)->comment('ciudad');
            $table->foreignId('observation_id')->nullable()
                  ->constrained('observation');
            $table->foreignId('causal_id')->nullable()
                  ->constrained('causal')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->timestamps();
        });
    }
};
