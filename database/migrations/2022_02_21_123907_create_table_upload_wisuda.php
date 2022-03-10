<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUploadWisuda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_upload_wisuda', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('pengesahan', 255);
            $table->string('foto', 255);
            $table->string('ijazah', 255);
            $table->string('bayarWisuda', 255);
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
        Schema::dropIfExists('table_upload_wisuda');
    }
}
