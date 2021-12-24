<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBimbinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bimbingan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('npm', 255);
            $table->string('judul', 255);
            $table->string('judulEnglish', 255);
            $table->string('formpersetujuan', 255);
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
        Schema::dropIfExists('data_bimbingan');
    }
}
