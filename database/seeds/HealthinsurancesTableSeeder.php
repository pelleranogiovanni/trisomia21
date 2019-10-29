<?php

use Illuminate\Database\Seeder;

class HealthinsurancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('healthinsurances')->insert([
            'obrasocial' => 'INSSSEP'
        ]);

        DB::table('healthinsurances')->insert([
            'obrasocial' => 'PAMI'
        ]);

        DB::table('healthinsurances')->insert([
            'obrasocial' => 'OSDE'
        ]);
    }
}
