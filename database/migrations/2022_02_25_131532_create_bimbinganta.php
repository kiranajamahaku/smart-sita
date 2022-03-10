<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbinganta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbinganta', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->dateTimeTz('tanggalUpload');
            $table->string('versi', 5);
            $table->string('description', 255);
            $table->enum('alasanUpload', [
                'LoA',
                'Paper Final',
                'Pertemuan 1',
                'Pertemuan 2',
                'Pertemuan 3',
                'Pertemuan 4',
                'Pertemuan 5',
                'Pertemuan 6',
                'Pertemuan 7',
                'Pertemuan 8']);
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
        Schema::dropIfExists('bimbinganta');
    }
}
