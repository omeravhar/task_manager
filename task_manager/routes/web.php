<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('main', [PagesController::class, 'showMainPage']);
Route::get('dashboard', [PagesController::class, 'showDashboard']);