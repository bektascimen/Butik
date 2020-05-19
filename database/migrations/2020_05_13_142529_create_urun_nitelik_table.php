<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunNitelikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun_nitelik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('urun_id')->unsigned();
            $table->foreign('urun_id')->references('id')->on('urun')->onDelete('cascade');
            $table->string('urun_kodu');
            $table->string('beden');
            $table->decimal('fiyat', 6,2);
            $table->integer('stok');
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
        Schema::dropIfExists('urun_nitelik');
    }
}
