<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [AuthController::class, 'getsignup']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/signin', [AuthController::class, 'getsignin']);
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/signout', [AuthController::class, 'signout']);

Route::get('/teams', [TeamsController::class, 'index']);
Route::get('teams/{id}', [TeamsController::class, 'show']);
Route::get('teams/players/{id}', [PlayersController::class, 'show']);