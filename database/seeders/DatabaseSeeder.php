<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Stuff::factory(5)->create();
        \App\Models\Iitem::factory(5)->create();
        \App\Models\Oitem::factory(5)->create();
        \App\Models\Customer::factory(5)->create();


        User::create([
            'nama' => 'Jack Ramadhan',
            'email' => 'admin@gmail.com',
            // 'no_wa' => '085161230906',
            // 'jenis' => 'Programmer',
            'password' => bcrypt('12345')
        ]);
    }
}
