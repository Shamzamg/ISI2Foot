<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RencontreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rencontres')->insert([
            [
                'id' => 1,
                'score' => '1-0',
                'equipe_id1' => 3,
                'equipe_id2' => 6,
                'date' => '2021-05-29',
                'heure' => '21:00:00',
                'championnat_id' => 1
            ],
    
            [
                'id' => 2,
                'score' => '2-1',
                'equipe_id1' => 4,
                'equipe_id2' => 3,
                'date' => '2021-05-28',
                'heure' => '19:30:00',
                'championnat_id' => 1
            ],
    
            [
                'id' => 3,
                'score' => '',
                'equipe_id1' => 1,
                'equipe_id2' => 5,
                'date' => '2021-06-09',
                'heure' => '21:00:00',
                'championnat_id' => 3
            ],

            [
                'id' => 4,
                'score' => '',
                'equipe_id1' => 6,
                'equipe_id2' => 2,
                'date' => '2021-06-11',
                'heure' => '20:50:00',
                'championnat_id' => 2
            ],

        ]);
    }
}
