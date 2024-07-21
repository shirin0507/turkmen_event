<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\CAtegoryController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrganizerController;

Route::get('/', function () {
    return view('welcome');})->name('welcome');

Route::get('/', 'HomeController@index');
Route::resource('events', EventController::class);
Route::resource('venues', VenueController::class);
Route::resource('categories', CategoryController::class);
Route::resource('tickets', TicketController::class);
Route::resource('orders', OrderController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('organizers', OrganizerController::class);

require __DIR__.'/auth.php';
