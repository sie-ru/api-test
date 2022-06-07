<?php

use App\Http\Controllers\API\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/items', [ItemController::class, 'index']);
