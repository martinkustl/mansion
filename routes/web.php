<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UpcomingEventsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Zde jsou uložený veškeré routy, které v naší aplikaci existují
|
*/

Route::get('/home', [HomeController::class, 'index']);
Route::delete('/home/{id}', [HomeController::class, 'deleteEvent'])->middleware('auth');

Route::get('/facilities', [FacilitiesController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index']);

Route::get('/events', [UpcomingEventsController::class, 'index']);
Route::post('/events', [UpcomingEventsController::class, 'createEvent'])->middleware('auth');
Route::delete('/events/{id}', [UpcomingEventsController::class, 'deleteEvent'])->middleware('auth');

Route::get('/reviews', [ReviewsController::class, 'index']);
Route::post('/reviews', [ReviewsController::class, 'createReview']);
Route::put('/reviews/{id}', [ReviewsController::class, 'createReviewAnswer'])->middleware('auth');
Route::delete('/reviews/{id}', [ReviewsController::class, 'deleteReview'])->middleware('auth');

// Tato cesta musí mít přiřazené jméno, protože v Auth middleware je nastaveno, že
// pokud uživatel není přihlášení a zkusí provést akci, ke které nemá oprávnění,
// tak bude přesměrován na route se jménem "login"
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Detail eventu
Route::get('/home/{id}', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'index']);
Route::get('/events/{id}/edit', [EventController::class, 'editEventView'])->middleware('auth');
Route::put('/events/{id}/edit', [EventController::class, 'editEvent'])->middleware('auth');

Route::get('/facilities/{id}', [FacilityController::class, 'index']);


Route::get("/", function () {
    return redirect("/home");
});
