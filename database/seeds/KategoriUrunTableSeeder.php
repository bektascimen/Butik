<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriUrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('kategori_urun')->insert(['kategori_id'=>2 , 'urun_id' => 1]);
        DB::table('kategori_urun')->insert(['kategori_id'=>2 , 'urun_id' => 2]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 3]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 4]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 5]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 6]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 7]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 8]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 9]);
        DB::table('kategori_urun')->insert(['kategori_id'=>1 , 'urun_id' => 10]);


        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
