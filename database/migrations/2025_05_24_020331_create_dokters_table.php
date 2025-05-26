<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter');
            $table->enum('tipe_dokter', ['Umum', 'Spesialis']);
            $table->unsignedBigInteger('spesialis_id')->nullable(); // Boleh kosong jika Umum
            $table->string('foto')->nullable(); // Path ke file foto
            $table->enum('status', ['Aktif', 'Non Aktif'])->default('Aktif');
            $table->timestamps();

            $table->foreign('spesialis_id')->references('id')->on('spesialis')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
