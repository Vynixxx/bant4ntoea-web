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
        Schema::create('agama', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Menyimpan judul agenda
            $table->string('lk'); // Menyimpan lk agenda
            $table->string('pr'); // Menyimpan pr agenda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agama');
    }
};
