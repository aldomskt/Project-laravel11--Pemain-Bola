<?php

use App\Http\Controllers\PlayerController;

Route::get('/players', [PlayerController::class, 'index']);
