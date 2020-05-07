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

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
