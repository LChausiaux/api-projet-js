<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameSaveFactory extends Factory {
    public function definition(): array {
        $rooms = [
            'Bibliothèque', 'Donjon', 'Forêt', 'Crypte', 'Armurerie', 'Cuisine', 'Jardin', 'Laboratoire', 'Tunnel',
            'Pont', 'Tour', 'Cave', 'Forge', 'Grenier', 'Salle du Trône',
        ];

        return [
            'player_name' => $this->faker->firstName(),
            'current_room' => $this->faker->randomElement($rooms),

            'inventory' => $this->faker->randomElements(['CLEF', 'POTION', 'LANTERNE', 'EPEE', 'CARTE', 'GRIMOIRE'], 2),

            'progression' => [
                'porte_nord_deverrouillee' => $this->faker->boolean(),
                'enigme_resolue' => $this->faker->boolean(),
            ],

            'stats' => [
                'pv_joueur' => $this->faker->numberBetween(10, 50),
                'pv_ennemi' => $this->faker->numberBetween(5, 30),
                'niveau' => $this->faker->numberBetween(1, 5),
            ],
        ];
    }
}
