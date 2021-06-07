<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            [
                'id' => 1,
                'equipe_id' => 1,
                'nom' => 'Benzema',
                'prenom' => 'Karim',
                'age' => 33,
                'numero' => 9,
                'photo' => 'benzema.png'
            ],
    
            [
                'id' => 2,
                'equipe_id' => 2,
                'nom' => 'Salah',
                'prenom' => 'Mohamed',
                'age' => 28,
                'numero' => 11,
                'photo' => 'salah.png'
            ],
    
            [
                'id' => 3,
                'equipe_id' => 3,
                'nom' => 'Cherki',
                'prenom' => 'Rayan',
                'age' => 16,
                'numero' => 18,
                'photo' => 'cherki.png'
            ],
    
            [
                'id' => 4,
                'equipe_id' => 4,
                'nom' => 'Mbappe',
                'prenom' => 'Killian',
                'age' => 22,
                'numero' => 7,
                'photo' => 'mbappe.png'
            ],
    
            [
                'id' => 5,
                'equipe_id' => 5,
                'nom' => 'Suárez',
                'prenom' => 'Luis',
                'age' => 34,
                'numero' => 9,
                'photo' => 'suarez.png'
            ],

            [
                'id' => 6,
                'equipe_id' => 6,
                'nom' => 'Thauvin',
                'prenom' => 'Florian',
                'age' => 28,
                'numero' => 26,
                'photo' => 'thauvin.png'
            ],

            [
                'id' => 7,
                'equipe_id' => 3,
                'nom' => 'Slimani',
                'prenom' => 'Islam',
                'age' => 32,
                'numero' => 20,
                'photo' => 'slimani.png'
            ],

            [
                'id' => 8,
                'equipe_id' => 1,
                'nom' => 'Mendy',
                'prenom' => 'Ferland',
                'age' => 25,
                'numero' => 23,
                'photo' => 'mendy.png'
            ],

            [
                'id' => 9,
                'equipe_id' => 1,
                'nom' => 'Militão',
                'prenom' => 'Éder',
                'age' => 23,
                'numero' => 3,
                'photo' => 'militao.png'
            ],

            [
                'id' => 10,
                'equipe_id' => 1,
                'nom' => 'Carvajal',
                'prenom' => 'Dani',
                'age' => 28,
                'numero' => 2,
                'photo' => 'carvajal.png'
            ],

            [
                'id' => 11,
                'equipe_id' => 1,
                'nom' => 'Varane',
                'prenom' => 'Raphaël',
                'age' => 27,
                'numero' => 5,
                'photo' => 'varane.png'
            ],

            [
                'id' => 12,
                'equipe_id' => 1,
                'nom' => 'Nacho',
                'prenom' => '',
                'age' => 30,
                'numero' => 6,
                'photo' => 'nacho.png'
            ],

            [
                'id' => 13,
                'equipe_id' => 1,
                'nom' => 'Ramos',
                'prenom' => 'Sergio',
                'age' => 35,
                'numero' => 4,
                'photo' => 'ramos.png'
            ],

            [
                'id' => 14,
                'equipe_id' => 1,
                'nom' => 'Hazard',
                'prenom' => 'Eden',
                'age' => 29,
                'numero' => 7,
                'photo' => 'hazard.png'
            ],

            [
                'id' => 15,
                'equipe_id' => 1,
                'nom' => 'Casemiro',
                'prenom' => '',
                'age' => 28,
                'numero' => 14,
                'photo' => 'casemiro.png'
            ],

            [
                'id' => 16,
                'equipe_id' => 1,
                'nom' => 'Courtois',
                'prenom' => 'Thibault',
                'age' => 28,
                'numero' => 1,
                'photo' => 'courtois.png'
            ],
    
        ]);
    }
}
