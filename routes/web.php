<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GameSaveController;

Route::post('/save', [GameSaveController::class, 'save']);
Route::get('/load/{name}', [GameSaveController::class, 'load']);
Route::get('/saves/{name}', [GameSaveController::class, 'listForPlayer']);
Route::get('/players', [GameSaveController::class, 'listPlayers']);
