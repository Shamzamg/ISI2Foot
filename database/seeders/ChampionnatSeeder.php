<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChampionnatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('championnats')->insert([
            [
                'id' => 1,
                'nom' => 'Ligue 1',
                'annee_debut' => 2020,
                'annee_fin' => 2021,
                'logo' => 'ligue1.png',
                'pays_id' => 1
            ],
    
            [
                'id' => 2,
                'nom' => 'Champions League',
                'annee_debut' => 2020,
                'annee_fin' => 2021,
                'logo' => 'champions_league.png',
                'pays_id' => 6
            ],
    
            [
                'id' => 3,
                'nom' => 'Europa League',
                'annee_debut' => 2020,
                'annee_fin' => 2021,
                'logo' => 'europa_league.png',
                'pays_id' => 6
            ],

        ]);
    }
}
