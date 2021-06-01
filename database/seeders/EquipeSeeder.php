<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            [
                'id' => 1,
                'nom_equipe' => 'Real Madrid',
                'logo_equipe' => 'realmadrid.png'
            ],
    
            [
                'id' => 2,
                'nom_equipe' => 'Liverpool FC',
                'logo_equipe' => 'liverpool.png'
            ],
    
            [
                'id' => 3,
                'nom_equipe' => 'Olympique Lyonnais',
                'logo_equipe' => 'OL.png'
            ],
    
            [
                'id' => 4,
                'nom_equipe' => 'Paris Saint-Germain FC',
                'logo_equipe' => 'PSG.png'
            ],
    
            [
                'id' => 5,
                'nom_equipe' => 'Atlético de Madrid',
                'logo_equipe' => 'atletico.png'
            ],

            [
                'id' => 6,
                'nom_equipe' => 'Olympique de Marseille',
                'logo_equipe' => 'OM.png'
            ],
    
        ]);
    }
}
