<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOzellikDegerleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ozellik_degerleri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ozellik_id')->unsigned();
            $table->integer('deger');
            $table->foreign('ozellik_id')->references('id')->on('ozellikler')->onDelete('cascade');
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
        Schema::dropIfExists('ozellik_degerleri');
    }
}
