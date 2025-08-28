<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/review', [MainController::class, 'review'])->name('review');

Route::post('/review/check', [MainController::class, 'review_check']);


//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'id: ' . $id . '. Name: ' . $name;
//});
