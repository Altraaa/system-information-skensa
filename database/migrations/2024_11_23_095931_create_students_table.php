<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Hubungan dengan tabel users
            $table->string('name');
            $table->string('nis')->unique(); // NIS siswa
            $table->foreignId('classroom_id')->constrained()->onDelete('cascade'); // Hubungan dengan kelas
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};