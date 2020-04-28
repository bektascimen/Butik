<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnAdres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('adresler', function (Blueprint $table){
           $table->string('ad');
           $table->string('soyad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::table('adresler', function (Blueprint $table){
            $table->dropColumn('ad');
            $table->dropColumn('soyad');
        });
    }
}
