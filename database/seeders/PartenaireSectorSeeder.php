<?php

namespace Database\Seeders;

use App\Models\PartenaireSector;
use Illuminate\Database\Seeder;

class PartenaireSectorSeeder extends Seeder
{
    public function run(): void
    {
        $sectors = [
            ['name' => 'Secteur public', 'slug' => 'secteur-public', 'sort_order' => 1],
            ['name' => 'Secteur privé', 'slug' => 'secteur-prive', 'sort_order' => 2],
            ['name' => 'ONG & Associations', 'slug' => 'ong-associations', 'sort_order' => 3],
            ['name' => 'Médias', 'slug' => 'medias', 'sort_order' => 4],
        ];

        foreach ($sectors as $sector) {
            PartenaireSector::updateOrCreate(
                ['slug' => $sector['slug']],
                $sector
            );
        }
    }
}
