<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertasController;
use App\Models\pesertas;

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
    return view('layout.main');
});
Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/pesertas', function () {
    return view('pesertas.data');
});
Route::get('/pesertas/add', function () {
    return view('pesertas.formadd');
});

Route::resource('pesertas',PesertasController::class);
