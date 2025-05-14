<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            'id_user' => 1,
            'name' => 'Luthfiyah S',
            'email' => 'piaaasar@gmail.com',
            'password' => Hash::make('password'), // lebih aman daripada bcrypt langsung
            'role' => 'Calon Mahasiswa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
