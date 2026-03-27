<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GameSave;
use Illuminate\Http\Request;

class GameSaveController extends Controller {

    public function save(Request $request) {
        $validated = $request->validate([
            'player_name' => 'required|string',
            'current_room' => 'required|string',
            'inventory' => 'nullable|array',
            'progression' => 'nullable|array',
            'stats' => 'nullable|array',
        ]);


        $save = GameSave::updateOrCreate(
            ['player_name' => $validated['player_name']],
            [
                'current_room' => $validated['current_room'],
                'inventory' => $validated['inventory'],
                'progression' => $validated['progression'],
                'stats' => $validated['stats'],
            ]
        );

        return response()->json(['message' => 'Partie sauvegardée !', 'data' => $save]);
    }


    public function load($name) {
        $save = GameSave::where('player_name', $name)->first();

        if(!$save) {
            return response()->json(['message' => 'Aucune sauvegarde trouvée'], 404);
        }

        return response()->json($save);
    }

    public function listForPlayer($name)
    {
        $saves = GameSave::where('player_name', $name)
            ->orderBy('updated_at', 'desc')
            ->get();

        if ($saves->isEmpty()) {
            return response()->json(['message' => 'Aucune sauvegarde pour ce joueur'], 404);
        }

        return response()->json($saves);
    }

    public function listPlayers()
    {
        $players = GameSave::distinct()
            ->orderBy('player_name', 'asc')
            ->get();

        if ($players->isEmpty()) {
            return response()->json(['message' => 'Aucun joueur trouvé'], 404);
        }

        return response()->json($players);
    }
}
