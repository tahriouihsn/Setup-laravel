<?php

use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SMIA SMI SMA SMPC SMP SMC SVT SVI SVA
        //
        App\Filiere::create([
            'nom_filiere' => 'SMIA',
            'id_dep' => 1,

        ]);

     App\Filiere::create([
        'nom_filiere' => 'SMI',
        'id_dep' => 1,

    ]);
    App\Filiere::create([
        'nom_filiere' => 'SMA',
        'id_dep' => 1,

    ]);App\Filiere::create([
        'nom_filiere' => 'SMPC',
        'id_dep' => 1,

    ]);App\Filiere::create([
        'nom_filiere' => 'SMP',
        'id_dep' => 1,

    ]);App\Filiere::create([
        'nom_filiere' => 'SMC',
        'id_dep' => 1,

    ]);App\Filiere::create([
        'nom_filiere' => 'SVT',
        'id_dep' => 1,

    ]);App\Filiere::create([
        'nom_filiere' => 'SVI',
        'id_dep' => 1,

    ]);App\Filiere::create([
        'nom_filiere' => 'SVA',
        'id_dep' => 1,

    ]);
    }
}
