<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersyaratanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persyaratan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('totalsks', 20);
            $table->string('mk_nilai_d', 20);
            $table->string('ipk', 70);
            $table->string('krs', 255);
            $table->string('transkrip', 255);
            $table->string('sertif1', 255);
            $table->string('sertif2', 255);
            $table->string('sertif3', 255);
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
        Schema::dropIfExists('persyaratan');
    }
}
