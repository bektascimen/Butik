<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiparisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sepet_id')->unsigned();
            $table->bigInteger('kullanici_id')->unsigned();
            $table->decimal('siparis_tutari',10,2);
            $table->string('durum',100)->nullable();
            $table->string('ad', 60);
            $table->string('soyad', 60);
            $table->string('telefon', 15);
            $table->string('varsayilan_adres',200);
            $table->string('odeme_yontemi',100)->nullable();
            $table->string('st_no',100)->nullable();
            $table->string('fatura_adresi', 500);
            $table->string('teslimat_adresi', 500);

            $table->timestamp('olusturma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarihi')->nullable();

            $table->unique('sepet_id');
            $table->foreign('sepet_id')->references('id')->on('sepet')->onDelete('cascade');
            $table->foreign('kullanici_id')->references('id')->on('kullanici')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siparis');
    }
}
