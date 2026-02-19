<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;

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
Route::get('/skills', [SkillsController::class, 'index']);

Route::get('/', function () {
    return view('Home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/contacts', function () {
    return view('contacts');
});