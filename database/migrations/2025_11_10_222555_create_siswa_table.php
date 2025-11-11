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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('jurusan');
            $table->integer('nilai');
            $table->foreignId('mentor_id')->constrained('mentors')->onDelete('cascade'); //membuat kolom mentor_id dimana mentor_id adalah foreign_key yg mengacu pada kolom id di tabel mentors, jika mentor dihapus maka siswa yang terhubung ikut dihapus
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
