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
        DB::table('kategori')->insert(['kategori_adi' => 'Çikolata', 'slug' => 'cikolata', 'parent_id' => 47]);
        DB::table('kategori')->insert(['kategori_adi' => 'Gofret', 'slug' => 'gofret', 'parent_id' => 47]);
        DB::table('kategori')->insert(['kategori_adi' => 'Cips', 'slug' => 'cips', 'parent_id' => 47]);
        DB::table('kategori')->insert(['kategori_adi' => 'Bar', 'slug' => 'bar', 'parent_id' => 47]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kek-Bisküvi', 'slug' => 'kekbiskuvi', 'parent_id' => 47]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kraker', 'slug' => 'kraker', 'parent_id' => 47]);
        DB::table('kategori')->insert(['kategori_adi' => 'Sakız-Şeker', 'slug' => 'sakizseker', 'parent_id' => 47]);
        DB::table('kategori')->insert(['kategori_adi' => 'Gazlı İçecek', 'slug' => 'gazliicecek', 'parent_id' => 48]);
        DB::table('kategori')->insert(['kategori_adi' => 'Nescafe', 'slug' => 'nescafe', 'parent_id' => 48]);
        DB::table('kategori')->insert(['kategori_adi' => 'Meyve Suyu', 'slug' => 'meyvesuyu', 'parent_id' => 48]);
        DB::table('kategori')->insert(['kategori_adi' => 'Soğuk Çay', 'slug' => 'sogukcay', 'parent_id' => 48]);
        DB::table('kategori')->insert(['kategori_adi' => 'Ayran-Süt', 'slug' => 'ayransut', 'parent_id' => 48]);
        DB::table('kategori')->insert(['kategori_adi' => 'Enerji', 'slug' => 'enerji', 'parent_id' => 48]);
        DB::table('kategori')->insert(['kategori_adi' => 'Buz', 'slug' => 'buz', 'parent_id' => 48]);
        DB::table('kategori')->insert(['kategori_adi' => 'Tadım', 'slug' => 'tadim', 'parent_id' => 49]);
        DB::table('kategori')->insert(['kategori_adi' => 'Makarna', 'slug' => 'makarna', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Salça', 'slug' => 'salca', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Sıvı Yağ', 'slug' => 'siviyag', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Baharat', 'slug' => 'baharat', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Şeker', 'slug' => 'seker', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Krema', 'slug' => 'krema', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Çorba', 'slug' => 'corba', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Pirinç', 'slug' => 'pirinc', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Un', 'slug' => 'un', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Puding', 'slug' => 'puding', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Damla Çikolata', 'slug' => 'damlacikolata', 'parent_id' => 50]);
        DB::table('kategori')->insert(['kategori_adi' => 'Simit-Poğaça', 'slug' => 'simitpogaca', 'parent_id' => 51]);
        DB::table('kategori')->insert(['kategori_adi' => 'Ekmek', 'slug' => 'ekmek', 'parent_id' => 51]);
        DB::table('kategori')->insert(['kategori_adi' => 'Peynir-Zeytin', 'slug' => 'peynirzeytin', 'parent_id' => 51]);
        DB::table('kategori')->insert(['kategori_adi' => 'Gevrek', 'slug' => 'gevrek', 'parent_id' => 51]);
        DB::table('kategori')->insert(['kategori_adi' => 'Çikolata', 'slug' => 'surmecikolata', 'parent_id' => 51]);
        DB::table('kategori')->insert(['kategori_adi' => 'Sandviç', 'slug' => 'sanvic', 'parent_id' => 51]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kahveler', 'slug' => 'kahveler', 'parent_id' => 52]);
        DB::table('kategori')->insert(['kategori_adi' => 'Tatlılar', 'slug' => 'tatlilar', 'parent_id' => 52]);
        DB::table('kategori')->insert(['kategori_adi' => 'Ağız Bakım', 'slug' => 'agizbakim', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Saç Bakım', 'slug' => 'sacbakim', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Hijyenik Ped', 'slug' => 'hijyenikped', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Tıraş Malzemeleri', 'slug' => 'tirasmalzemeleri', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Vucüt-El Bakım', 'slug' => 'vucutelbakim', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Ağda-Tüy Dökücü', 'slug' => 'agdatuydokucu', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Bebek', 'slug' => 'bebek', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Cinsellik', 'slug' => 'cinsellik', 'parent_id' => 53]);
        DB::table('kategori')->insert(['kategori_adi' => 'Temizlik Gereçleri', 'slug' => 'temizlik', 'parent_id' => 54]);
        DB::table('kategori')->insert(['kategori_adi' => 'Çamaşır Gereçleri', 'slug' => 'camasir', 'parent_id' => 54]);
        DB::table('kategori')->insert(['kategori_adi' => 'Bulaşık Gereçleri', 'slug' => 'bulasik', 'parent_id' => 54]);
        DB::table('kategori')->insert(['kategori_adi' => 'Oda Kokusu', 'slug' => 'odakokusu', 'parent_id' => 54]);
        DB::table('kategori')->insert(['kategori_adi' => 'Atıştırmalık', 'slug' => 'atistirmalik', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'İçecek', 'slug' => 'icecek', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kuruyemiş', 'slug' => 'kuruyemis', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Temel Gıda', 'slug' => 'temel-gida', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kahvaltı', 'slug' => 'kahvalti', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kahve-Tatlı', 'slug' => 'kahve-tatli', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Kişisel Bakım', 'slug' => 'kisisel-bakim', 'parent_id' => 0]);
        DB::table('kategori')->insert(['kategori_adi' => 'Ev Bakım', 'slug' => 'ev-bakim', 'parent_id' => 0]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
