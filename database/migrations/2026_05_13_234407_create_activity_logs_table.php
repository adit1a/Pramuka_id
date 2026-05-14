<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('activity_logs', function (Blueprint $table) {
        $table->id();
        $table->string('event_name'); // Nama Kegiatan
        $table->string('category');   // Kategori (Organisasi/Teknis)
        $table->string('achievement'); // Medali/Sertifikat
        $table->timestamp('scanned_at'); // Waktu Scan
        $table->string('status')->default('Terverifikasi');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
