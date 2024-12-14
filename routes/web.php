<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Define routes using the HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ebike', [HomeController::class, 'e_bike'])->name('ebike');
Route::get('/e_scooter', [HomeController::class, 'e_scooter'])->name('e_scooter');
Route::get('/e_unicycle',[HomeController::class,'e_unicycle'])->name('unicycle');
Route::get('/e_wheelchair',[HomeController::class,'e_wheelchair'])->name('e_wheelchair');
Route::get('/accessories',[HomeController::class, 'accessories'])->name('accessories');
Route::get('/retail', [HomeController::class, 'retail'])->name('retail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');
