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
        DB::table('urun')->insert(['urun_adi' => 'Ülker Gofret','isletme_id'=> 2, 'slug' => 'ülker-gofret', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Eti Gofret', 'isletme_id'=> 2,'slug' => 'eti-gofret', 'fiyat'=> 1.25, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çokonat', 'isletme_id'=> 2,'slug' => 'cokonat', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido', 'isletme_id'=> 2,'slug' => 'dido', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Çokonat', 'isletme_id'=> 2,'slug' => 'cokonat', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido', 'isletme_id'=> 2,'slug' => 'dido', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido Frambuaz','isletme_id'=> 2, 'slug' => 'dido-frambuaz', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Dido Trio','isletme_id'=> 2, 'slug' => 'dido-trio', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Maximus','isletme_id'=> 2, 'slug' => 'maximus', 'fiyat'=> 1.5, 'aciklama'=>'25 gr.']);
        DB::table('urun')->insert(['urun_adi' => 'Crunch','isletme_id'=> 2, 'slug' => 'crunch', 'fiyat'=> 2, 'aciklama'=>'25 gr.']);


        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

