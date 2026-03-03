<?php

namespace Database\Seeders;

use App\Models\Partenaire;
use App\Models\PartenaireSector;
use Illuminate\Database\Seeder;

class PartenaireSeeder extends Seeder
{
    /**
     * Crée le partenaire par défaut pour la connexion à l'espace partenaire.
     */
    public function run(): void
    {
        $sector = PartenaireSector::query()->where('slug', 'secteur-prive')->first();

        Partenaire::updateOrCreate(
            ['email' => 'partenaire@senafet.td'],
            [
                'partenaire_sector_id' => $sector?->id,
                'company' => 'Partenaire Démo',
                'contact_name' => 'Contact Partenaire',
                'password' => 'password',
                'phone' => null,
                'level' => 'or',
                'logo_path' => null,
                'message' => null,
                'is_published' => true,
                'sort_order' => 0,
            ]
        );
    }
}
