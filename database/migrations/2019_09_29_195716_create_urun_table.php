<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('isletme_id')->unsigned();
            $table->string('urun_adi',150);
            $table->string('slug', 150);
            $table->text('aciklama');
            $table->decimal('indirimli_fiyat', 6, 2)->default(0);
            $table->decimal('fiyat', 6, 2);
            $table->timestamp('olusturma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarihi')->nullable();
            $table->foreign('isletme_id')->references('id')->on('isletme')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urun');
    }
}
