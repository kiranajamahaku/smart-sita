<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('description', 255);
            $table->dateTimeTz('tanggalUpload');
            $table->enum('alasanVerifikasi', [
                'Bukti Pembayaran Review Akhir',
                'Bukti Transfer',
                'Form Persetujuan Pembimbing',
                'Jurnal Link Terbit',
                'Cek Turnitin',
                'Screenshot Aplikasi',
                'Transkrip',
                'Form Persetujuan Publish']);
            $table->string('uploadFile', 255);
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
        Schema::dropIfExists('verifikasi');
    }
}
