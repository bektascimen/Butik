<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('kategori')->truncate();
        DB::table('kategori')->insert(['kategori_adi' => 'Yeni Gelenler', 'slug' => 'yeni-gelen', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Elbise', 'slug' => 'elbise', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Üst Giyim', 'slug' => 'ust-giyim', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Aksesuar', 'slug' => 'aksesuar', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Alt Giyim', 'slug' => 'alt-giyim', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'İndirim', 'slug' => 'indirim', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Bluz', 'slug' => 'bluz', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Gömlek', 'slug' => 'gomlek', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Ceket', 'slug' => 'ceket', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Tişört', 'slug' => 'tisort', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Atlet', 'slug' => 'atlet', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Sweat', 'slug' => 'sweat', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Hırka', 'slug' => 'hirka', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Tunik', 'slug' => 'tunik', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Takım', 'slug' => 'takim', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Triko', 'slug' => 'triko', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kazak', 'slug' => 'kazak', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Tulum', 'slug' => 'tulum', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Trenç', 'slug' => 'trenc', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kaban & Mont', 'slug' => 'kaban-mont', 'parent_id' => 3]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kemer', 'slug' => 'kemer', 'parent_id' => 4]);
        DB::table('kategori')->insert(['kategori_adi' => 'Çorap', 'slug' => 'corap', 'parent_id' => 4]);
        DB::table('kategori')->insert(['kategori_adi' => 'Pantolon', 'slug' => 'pantolon', 'parent_id' => 5]);
        DB::table('kategori')->insert(['kategori_adi' => 'Jean Pantolon', 'slug' => 'jean-pantolon', 'parent_id' => 5]);
        DB::table('kategori')->insert(['kategori_adi' => 'Mini Etek', 'slug' => 'mini-etek', 'parent_id' => 5]);
        DB::table('kategori')->insert(['kategori_adi' => 'Eşofman', 'slug' => 'esofman', 'parent_id' => 5]);
        DB::table('kategori')->insert(['kategori_adi' => 'Tayt', 'slug' => 'tayt', 'parent_id' => 5]);
        DB::table('kategori')->insert(['kategori_adi' => 'Şort', 'slug' => 'sort', 'parent_id' => 5]);
        DB::table('kategori')->insert(['kategori_adi' => 'Etek', 'slug' => 'etek', 'parent_id' => 5]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
