<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunDetayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_detay', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('urun_id')->unsigned()->unique();
            $table->boolean('gosterSlider');
            $table->boolean('gosterGununFirsati');
            $table->boolean('gosterOneCikan');
            $table->boolean('gosterCokSatan');
            $table->boolean('gosterIndirimli');

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
        Schema::dropIfExists('urun_detay');
    }
}
