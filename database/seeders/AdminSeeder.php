<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Crée l'utilisateur admin par défaut.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@senafet.td'],
            [
                'name' => 'Administrateur',
                'password' => 'password',
            ]
        );
    }
}
