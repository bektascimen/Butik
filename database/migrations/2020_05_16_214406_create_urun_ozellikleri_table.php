<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunOzellikleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_ozellikleri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('urun_id')->unsigned();
            $table->unsignedBigInteger('ozellik_id')->unsigned();
            $table->unsignedBigInteger('ozellik_deger_id')->unsigned();
            $table->integer('stok');
            $table->foreign('urun_id')->references('id')->on('urun')->onDelete('cascade');
            $table->foreign('ozellik_id')->references('id')->on('ozellikler')->onDelete('cascade');
            $table->foreign('ozellik_deger_id')->references('id')->on('ozellik_degerleri')->onDelete('cascade');
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
        Schema::dropIfExists('urun_ozellikleri');
    }
}
