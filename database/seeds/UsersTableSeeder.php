<?php

use App\Model\Admin\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'slug' => Str::slug('Administrador'),
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
