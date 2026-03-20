<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $name)
 * @method static updateOrCreate(array $array, array $array1)
 */
class GameSave extends Model
{
    use HasFactory;
    protected $table = 'game_saves';
    /**
     * Les attributs qui sont assignables en masse.
     * Correspond aux besoins d'exploration et de combat du projet[cite: 50, 53].
     */
    protected $fillable = [
        'player_name',
        'current_room',
        'inventory',
        'progression',
        'stats',
    ];

    /**
     * Le cast des colonnes JSON en tableaux PHP.
     * Indispensable pour manipuler l'inventaire et les PV facilement[cite: 24, 35].
     */
    protected $casts = [
        'inventory'   => 'array', // Pour stocker la liste d'objets [cite: 6]
        'progression' => 'array', // Pour l'état des énigmes et passages [cite: 27]
        'stats'       => 'array', // Pour les Points de Vie (PV) du combat [cite: 35]
    ];
}
