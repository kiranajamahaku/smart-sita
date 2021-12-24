<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('username', 20);
            $table->string('fullname', 70);
            $table->enum('fakultas', ['FTKI', 'Other'])->default('FTKI');
            $table->enum('prodi', ['Sistem Informasi', 'Teknik Informatika']);
            $table->enum('statusMhs', ['Reguler', 'Karyawan']);
            $table->enum('tahunAkad', ['2021/2022 - Ganjil', '2021/2022 - Genap']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone', 15);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
