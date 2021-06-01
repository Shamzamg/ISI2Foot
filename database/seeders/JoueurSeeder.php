<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
    
        ]);
    }
}
