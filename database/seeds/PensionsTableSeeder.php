<?php

use Illuminate\Database\Seeder;

class PensionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pensions')->insert([
            'pension' => 'PENSION 1'
        ]);

        DB::table('pensions')->insert([
            'pension' => 'PENSION 2'
        ]);

        DB::table('pensions')->insert([
            'pension' => 'PENSION 3'
        ]);



    }
}
