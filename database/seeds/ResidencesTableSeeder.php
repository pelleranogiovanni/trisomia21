<?php

use Illuminate\Database\Seeder;

class ResidencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residences')->insert([
            'situacionresidencial' => 'VIVIENDA FAMILIAR'
        ]);

        DB::table('residences')->insert([
            'situacionresidencial' => 'HOGAR DE MENORES'
        ]);

        DB::table('residences')->insert([
            'situacionresidencial' => 'HOGAR DE ADULTO MAYORES'
        ]);

        DB::table('residences')->insert([
            'situacionresidencial' => 'SITUACIÓN DE CALLE'
        ]);
    }
}
