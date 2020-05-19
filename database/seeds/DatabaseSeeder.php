<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //$this->call(UrunTableSeeder::class);
        //$this->call(KategoriTableSeeder::class);
        //$this->call(UrunDetayTableSeeder::class);
        //$this->call(KategoriUrunTableSeeder::class);
        //$this->call(IlSeeder::class);
        //$this->call(IsletmeSeeder::class);
        //$this->call(IlceSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
