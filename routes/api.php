<?php

use App\Http\Controllers\Api\PriceController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function() {

});

Route::prefix('/v1')->group(function() {
    Route::get('/prices', [PriceController::class, 'index']);
});
