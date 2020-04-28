<?php

use Illuminate\Database\Seeder;

class AdresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $adres = \App\Models\Adresler::create([
            "kullanici_id" => 1,
            "adres_baslik" => $faker->citySuffix,
            "il_id" => 1,
            "ilce_id" => 1,
            "satir1" => $faker->streetAddress,
            "satir2" => $faker->secondaryAddress,
            "telefon" => $faker->e164PhoneNumber,
            "varsayilan" => 0,
            "iletisim_adi" => $faker->name
        ]);
    }
}
