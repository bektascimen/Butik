<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('il')->truncate();
        DB::table('il')->insert(['il_adi' => 'Adana']);
        DB::table('il')->insert(['il_adi' => 'Adıyaman']);
        DB::table('il')->insert(['il_adi' => 'Afyon']);
        DB::table('il')->insert(['il_adi' => 'Ağrı']);
        DB::table('il')->insert(['il_adi' => 'Amasya']);
        DB::table('il')->insert(['il_adi' => 'Ankara']);
        DB::table('il')->insert(['il_adi' => 'Antalya']);
        DB::table('il')->insert(['il_adi' => 'Artvin']);
        DB::table('il')->insert(['il_adi' => 'Aydın']);
        DB::table('il')->insert(['il_adi' => 'Balıkesir']);
        DB::table('il')->insert(['il_adi' => 'Bilecik']);
        DB::table('il')->insert(['il_adi' => 'Bingöl']);
        DB::table('il')->insert(['il_adi' => 'Bitlis']);
        DB::table('il')->insert(['il_adi' => 'Bolu']);
        DB::table('il')->insert(['il_adi' => 'Burdur']);
        DB::table('il')->insert(['il_adi' => 'Bursa']);
        DB::table('il')->insert(['il_adi' => 'Çanakkale']);
        DB::table('il')->insert(['il_adi' => 'Çankırı']);
        DB::table('il')->insert(['il_adi' => 'Çorum']);
        DB::table('il')->insert(['il_adi' => 'Denizli']);
        DB::table('il')->insert(['il_adi' => 'Diyarbakır']);
        DB::table('il')->insert(['il_adi' => 'Edirne']);
        DB::table('il')->insert(['il_adi' => 'Elazığ']);
        DB::table('il')->insert(['il_adi' => 'Erzincan']);
        DB::table('il')->insert(['il_adi' => 'Erzurum']);
        DB::table('il')->insert(['il_adi' => 'Eskişehir']);
        DB::table('il')->insert(['il_adi' => 'Gaziantep']);
        DB::table('il')->insert(['il_adi' => 'Giresun']);
        DB::table('il')->insert(['il_adi' => 'Gümüşhane']);
        DB::table('il')->insert(['il_adi' => 'Hakkari']);
        DB::table('il')->insert(['il_adi' => 'Hatay']);
        DB::table('il')->insert(['il_adi' => 'Isparta']);
        DB::table('il')->insert(['il_adi' => 'Mersin']);
        DB::table('il')->insert(['il_adi' => 'İstanbul']);
        DB::table('il')->insert(['il_adi' => 'İzmir']);
        DB::table('il')->insert(['il_adi' => 'Kars']);
        DB::table('il')->insert(['il_adi' => 'Kastamonu']);
        DB::table('il')->insert(['il_adi' => 'Kayseri']);
        DB::table('il')->insert(['il_adi' => 'Kırklareli']);
        DB::table('il')->insert(['il_adi' => 'Kırşehir']);
        DB::table('il')->insert(['il_adi' => 'Kocaeli']);
        DB::table('il')->insert(['il_adi' => 'Konya']);
        DB::table('il')->insert(['il_adi' => 'Kütahya']);
        DB::table('il')->insert(['il_adi' => 'Malatya']);
        DB::table('il')->insert(['il_adi' => 'Manisa']);
        DB::table('il')->insert(['il_adi' => 'Kahramanmaraş']);
        DB::table('il')->insert(['il_adi' => 'Mardin']);
        DB::table('il')->insert(['il_adi' => 'Muğla']);
        DB::table('il')->insert(['il_adi' => 'Muş']);
        DB::table('il')->insert(['il_adi' => 'Nevşehir']);
        DB::table('il')->insert(['il_adi' => 'Niğde']);
        DB::table('il')->insert(['il_adi' => 'Ordu']);
        DB::table('il')->insert(['il_adi' => 'Rize']);
        DB::table('il')->insert(['il_adi' => 'Sakarya']);
        DB::table('il')->insert(['il_adi' => 'Samsun']);
        DB::table('il')->insert(['il_adi' => 'Siirt']);
        DB::table('il')->insert(['il_adi' => 'Sinop']);
        DB::table('il')->insert(['il_adi' => 'Sivas']);
        DB::table('il')->insert(['il_adi' => 'Tekirdağ']);
        DB::table('il')->insert(['il_adi' => 'Tokat']);
        DB::table('il')->insert(['il_adi' => 'Trabzon']);
        DB::table('il')->insert(['il_adi' => 'Tunceli']);
        DB::table('il')->insert(['il_adi' => 'Şanlıurfa']);
        DB::table('il')->insert(['il_adi' => 'Uşak']);
        DB::table('il')->insert(['il_adi' => 'Van']);
        DB::table('il')->insert(['il_adi' => 'Yozgat']);
        DB::table('il')->insert(['il_adi' => 'Zonguldak']);
        DB::table('il')->insert(['il_adi' => 'Aksaray']);
        DB::table('il')->insert(['il_adi' => 'Bayburt']);
        DB::table('il')->insert(['il_adi' => 'Karaman']);
        DB::table('il')->insert(['il_adi' => 'Kırıkkale']);
        DB::table('il')->insert(['il_adi' => 'Batman']);
        DB::table('il')->insert(['il_adi' => 'Şırnak']);
        DB::table('il')->insert(['il_adi' => 'Bartın']);
        DB::table('il')->insert(['il_adi' => 'Ardahan']);
        DB::table('il')->insert(['il_adi' => 'Iğdır']);
        DB::table('il')->insert(['il_adi' => 'Yalova']);
        DB::table('il')->insert(['il_adi' => 'Karabük']);
        DB::table('il')->insert(['il_adi' => 'Kilis']);
        DB::table('il')->insert(['il_adi' => 'Osmaniye']);
        DB::table('il')->insert(['il_adi' => 'Düzce']);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
