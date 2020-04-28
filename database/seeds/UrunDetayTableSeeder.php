<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UrunDetay;
use Illuminate\Support\Str;

class UrunDetayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('urun_detay')->truncate();
        DB::table('urun_detay')->insert(['urun_id' => 1, 'gosterGununFirsati'=>0, 'gosterSlider' => 1, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 2, 'gosterGununFirsati'=>0, 'gosterSlider' => 1, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 3, 'gosterGununFirsati'=>0, 'gosterSlider' => 1, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 4, 'gosterGununFirsati'=>0, 'gosterSlider' => 1, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 5, 'gosterGununFirsati'=>0, 'gosterSlider' => 1, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 6, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 7, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 8, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 1, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 9, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 1, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 10, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 1, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 11, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 1, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 12, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 1, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 13, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 14, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 15, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 16, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 1, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 17, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 1, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 18, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 1, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 19, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 1, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 20, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 1, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 21, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 22, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 23, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 24, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 25, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 26, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 27, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 28, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 29, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 30, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 1]);
        DB::table('urun_detay')->insert(['urun_id' => 31, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 1]);
        DB::table('urun_detay')->insert(['urun_id' => 32, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 1]);
        DB::table('urun_detay')->insert(['urun_id' => 33, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 1]);
        DB::table('urun_detay')->insert(['urun_id' => 34, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 35, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 36, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 37, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 38, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 39, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 40, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 41, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 42, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 43, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 44, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 45, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 46, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 47, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 48, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 49, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 50, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 51, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 52, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 53, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 54, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 55, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 56, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 57, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 58, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 59, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 60, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 61, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 62, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 63, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 64, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 65, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 66, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 67, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 68, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 69, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 70, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 71, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 72, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 73, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 74, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 75, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 76, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 77, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 78, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 79, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 80, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 81, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 82, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 83, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 84, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 85, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 86, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 87, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 88, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 89, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 90, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 91, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 92, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 93, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 94, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 95, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 96, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 97, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 98, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 99, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 100, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 101, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 102, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 103, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 104, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 105, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 106, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 107, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 108, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 109, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 110, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 111, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 112, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 113, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 114, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 115, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 116, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 117, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 118, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 119, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 120, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 121, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 122, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 123, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 124, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 125, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 126, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 127, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 128, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 129, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 130, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 131, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);
        DB::table('urun_detay')->insert(['urun_id' => 132, 'gosterGununFirsati'=>0, 'gosterSlider' => 0, 'gosterOneCikan'=> 0, 'gosterCokSatan'=> 0, 'gosterIndirimli'=> 0]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
