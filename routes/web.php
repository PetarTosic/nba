<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/createcomment', [CommentsController::class, 'store'])->middleware('comm');
Route::get('/forbidden', [CommentsController::class, 'forbidden']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [AuthController::class, 'getsignup'])->middleware('auth2');
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/signin', [AuthController::class, 'getsignin'])->middleware('auth2');
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/signout', [AuthController::class, 'signout']);
Route::get('/verify/{verification_code}', [AuthController::class, 'verify']);

Route::get('/teams', [TeamsController::class, 'index'])->middleware('auth');
Route::get('teams/{id}', [TeamsController::class, 'show'])->middleware('auth');
Route::get('teams/players/{id}', [PlayersController::class, 'show'])->middleware('auth');