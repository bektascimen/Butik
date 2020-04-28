<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBegenilenUrunler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('begenilen_urunler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kullanici_id')->unsigned();
            $table->unsignedBigInteger('urun_id')->unsigned();
            $table->foreign('kullanici_id')->references('id')->on('kullanici')->onDelete('cascade');
            $table->foreign('urun_id')->references('id')->on('urun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('begenilen_urunler');
    }
}
