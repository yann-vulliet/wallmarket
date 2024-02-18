<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        User::create([
            'firstName' => 'admin',
            'lastName' => 'istrateur',
            'email' => 'Arinfo@mail.com',
            'password' => bcrypt('Arinfo2023$'),
            'role_id' => 1
        ]);  

        User::create([
            'firstName' => 'edit',
            'lastName' => 'eur',
            'email' => 'editeur@mail.com',
            'password' => bcrypt('Arinfo2023$'),
            'role_id' => 2
        ]);
    }
}
