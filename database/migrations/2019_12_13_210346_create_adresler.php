<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresler', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("kullanici_id");
            $table->string("adres_baslik");
            $table->integer("il_id");
            $table->integer("ilce_id");
            $table->string("satir1");
            $table->string("satir2");
            $table->string("telefon");
            $table->tinyInteger("varsayilan")->default(0);
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
        Schema::dropIfExists('adresler');
    }
}
