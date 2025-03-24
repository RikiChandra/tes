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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan')->constrained('kendaraans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('customer')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggal_transaksi');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_pulang');
            $table->enum('status', ['selesai', 'batal']);
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
