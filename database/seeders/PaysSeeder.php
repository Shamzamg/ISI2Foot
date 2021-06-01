<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            [
                'id' => 1,
                'nom' => 'France',
                'logo' => 'france.png'
            ],
    
            [
                'id' => 2,
                'nom' => 'Espagne',
                'logo' => 'espagne.png'
            ],
    
            [
                'id' => 3,
                'nom' => 'Angleterre',
                'logo' => 'angleterre.png'
            ],
    
            [
                'id' => 4,
                'nom' => 'Allemagne',
                'logo' => 'allemagne.png'
            ],
    
            [
                'id' => 5,
                'nom' => 'Italie',
                'logo' => 'italie.png'
            ],

            [
                'id' => 6,
                'nom' => 'Europe',
                'logo' => 'europe.png'
            ],
    
        ]);
    }
}
