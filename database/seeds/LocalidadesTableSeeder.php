<?php

use Illuminate\Database\Seeder;

class LocalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'localidad' => 'Avia Terai'
        ]);

        DB::table('locations')->insert([
            'localidad' => 'Barranqueras'
        ]);

        DB::table('locations')->insert([
            'localidad' => 'Basail'
        ]);

        DB::table('locations')->insert([
            'localidad' => 'Campo Largo'
        ]);


        DB::table('locations')->insert([
            'localidad' => 'Capitán Solari'
        ]);

        DB::table('locations')->insert([
            'localidad' => 'Villa Ángela'
        ]);




    }
}
