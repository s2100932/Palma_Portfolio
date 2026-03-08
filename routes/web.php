<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/',  [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('isAdmin')->group(function () {
    Route::get('/home',       [HomeController::class,       'index'])->name('home');
    Route::get('/projects',   [ProjectController::class,    'index'])->name('projects');
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experiences');
    Route::get('/skills',     [SkillsController::class,     'index'])->name('skills');
});