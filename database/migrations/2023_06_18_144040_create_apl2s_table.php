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
        Schema::create('apl2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formulir_id')->references('id')->on('formulirs');
            $table->foreignId('elemen_id')->references('id')->on('elemens');
            $table->enum('penilaian', ['K', 'BK'])->nullable();
            $table->text('bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apl2s');
    }
};
