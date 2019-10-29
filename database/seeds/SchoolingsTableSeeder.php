<?php

use Illuminate\Database\Seeder;

class SchoolingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schoolings')->insert([
            'institucioneducativa' => 'ESCUELA NORMAL'
        ]);

        DB::table('schoolings')->insert([
            'institucioneducativa' => 'ESCUELA ESPECIAL'
        ]);

        DB::table('schoolings')->insert([
            'institucioneducativa' => 'TALLER PROTEGIDO'
        ]);

        DB::table('schoolings')->insert([
            'institucioneducativa' => 'CENTRO TERAPÉUTICO'
        ]);
    }
}
