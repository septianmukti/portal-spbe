<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Septian Mukti',
            'email' => 'septian@madiunkab.go.id',
            'password' => bcrypt('Qwertyok123*7'),
        ]);

        User::create([
            'name' => 'Diskominfo Kab. Madiun',
            'email' => 'diskominfo@madiunkab.go.id',
            'password' => bcrypt('Kominfo2024'),
        ]);

    }
}
