<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EquipeSeeder;
use Database\Seeders\JoueurSeeder;
use Database\Seeders\PaysSeeder;
use Database\Seeders\ChampionnatSeeder;
use Database\Seeders\RencontreSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(EquipeSeeder::class);
        $this->call(JoueurSeeder::class);
        $this->call(PaysSeeder::class);
        $this->call(ChampionnatSeeder::class);
        $this->call(RencontreSeeder::class);
    }
}
