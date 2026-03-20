<?php

namespace Database\Seeders;

use App\Models\GameSave;
use Illuminate\Database\Seeder;

class GameSaveSeeder extends Seeder
{
    public function run(): void
    {
        // Syntaxe correcte : Appel via le Modèle
        GameSave::factory(10)->create();

        // Pour un test spécifique (Projet 2026)
        GameSave::factory()->create([
            'player_name' => 'Professeur_Test',
            'current_room' => 'Bibliothèque',
            'inventory' => ['CLEF', 'GRIMOIRE'],
            'progression' => ['porte_verrouillee' => true],
            'stats' => ['pv' => 100]
        ]);
    }
}
