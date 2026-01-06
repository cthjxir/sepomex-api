<?php

use App\Http\Controllers\APICodigosPostalesController;
use Illuminate\Support\Facades\Route;

Route::get('/estados', [APICodigosPostalesController::class, 'estados']);
Route::get('/municipios/{estado}', [APICodigosPostalesController::class, 'municipios']);
Route::get('/codigos-postales/{codigo_postal}', [APICodigosPostalesController::class, 'show']);
