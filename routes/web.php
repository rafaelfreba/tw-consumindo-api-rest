<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\GithubController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/github/buscar', [GithubController::class, 'buscar'])->name('buscar');
Route::get('/curso/create', [CursoController::class, 'create'])->name('curso.create');