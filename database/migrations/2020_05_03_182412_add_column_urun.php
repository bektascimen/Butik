<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUrun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('urun', function (Blueprint $table){
            $table->string('renk')->default(0);
            $table->string('beden')->default(0);
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
        Schema::table('urun', function (Blueprint $table){
            $table->dropColumn('renk');
            $table->dropColumn('beden');
        });
    }
}
