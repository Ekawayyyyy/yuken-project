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
        Schema::create('datakeuangans', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->numeric('pendapatan_tahunan');
            $table->numeric('laba_bersih');
            $table->numeric('rasio_utang');
            $table->string('tingkat_resiko');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakeuangans');
    }
};
