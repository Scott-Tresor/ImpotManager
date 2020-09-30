<?php

use Illuminate\Database\Seeder;

class AdresseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Adresse::truncate();

        \App\Adresse::create([
           'province' => 'Haut-Katanga',
            'commune' => 'Lubumbashi',
            'ville' => 'Lubumbashi',
            'quartier' => 'Gambela 2',
            'number' => 4
        ]);
    }
}
