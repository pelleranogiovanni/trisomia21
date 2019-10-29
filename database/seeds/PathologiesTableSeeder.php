<?php

use Illuminate\Database\Seeder;

class PathologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pathologies')->insert([
            'patologia' => 'PATOLOGIA 1'
        ]);

        DB::table('pathologies')->insert([
            'patologia' => 'PATOLOGIA 2'
        ]);

        DB::table('pathologies')->insert([
            'patologia' => 'PATOLOGIA 3'
        ]);
    }
}
