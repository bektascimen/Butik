<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnSiparis extends Migration
{

    protected $tableAdi = 'siparis';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table($this->tableAdi, function (Blueprint $table){
            $table->dropColumn('varsayilan_adres');
            $table->string('fatura_adresi');
            $table->string('teslimat_adresi');
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

        Schema::table($this->tableAdi, function (Blueprint $table){
            $table->string('varsayilan_adres');
            $table->dropColumn('fatura_adresi');
            $table->dropColumn('teslimat_adresi');
        });
    }
}
