<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpcomingEventsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [HomeController::class, 'index']);
Route::get('/events', [UpcomingEventsController::class, 'index']);
Route::get('/facilities', [FacilitiesController::class, 'index']);


// Detail eventu
Route::get('/home/{id}', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'index']);
Route::get('/facilities/{id}', [FacilityController::class, 'index']);


Route::get("/", function () {
    return redirect("/home");
});
