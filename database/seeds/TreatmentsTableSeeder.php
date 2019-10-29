<?php

use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
            'tratamiento' => 'TRATAMIENTO 1'
        ]);

        DB::table('treatments')->insert([
            'tratamiento' => 'TRATAMIENTO 2'
        ]);

        DB::table('treatments')->insert([
            'tratamiento' => 'TRATAMIENTO 3'
        ]);

    }
}
