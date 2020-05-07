<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('urun')->truncate();
        DB::table('urun')->insert(['urun_adi' => 'Lila Üçlü Yeni Takım','isletme_id'=> 1, 'slug' => 'lüla-uclu-yeni-takim', 'fiyat'=> 159.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Camel Üzerine İnce Ekru Çizgili Bluz', 'isletme_id'=> 1,'slug' => 'camel-uzerine-ince-cizgili-bluz', 'fiyat'=> 39.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Kahve Siyah Puantiyeli Bluz', 'isletme_id'=> 1,'slug' => 'kahve-siyah-puantiyeli-bluz', 'fiyat'=> 49.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Siyah Tül Detaylı Twist Ceket', 'isletme_id'=> 1,'slug' => 'siyah-tul-detayli-twist-ceket', 'fiyat'=> 100, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Camel Astarlı Tütü Etek', 'isletme_id'=> 1,'slug' => 'camel-astarli-tutu-etek', 'fiyat'=> 49.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Nar Çiçeği Mor Desenli Maxi Boy Etek', 'isletme_id'=> 2,'slug' => 'nar-cicegi-mor-desenli-etek', 'fiyat'=> 79.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Siyan Önü Çıtçıtlı Kısa Çan Etek','isletme_id'=> 2, 'slug' => 'siyan-onlu-citcitli-etek', 'fiyat'=> 35, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Siyah Yüksek Bel Toparlayıcı Tül Detaylı Tayt','isletme_id'=> 2, 'slug' => 'siyah-yuksek-bel-tayt', 'fiyat'=> 49.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Haki Penye Altı Şifon Elbise','isletme_id'=> 2, 'slug' => 'haki-penye-elbise', 'fiyat'=> 49.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);
        DB::table('urun')->insert(['urun_adi' => 'Yavru Ağzı Vatkalı Penye Elbise','isletme_id'=> 2, 'slug' => 'penye-elbise', 'fiyat'=> 59.90, 'aciklama'=>'Model Ölçüleri Boy: 1.68 cm Kilo: 50 kg Model Üst: XS/34 Alt: XS/34/25 beden giyiyor Yıkama Talimatı Ürünün iç etiket bölümünde gerekli yıkama talimatı yer almaktadır.']);


        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

