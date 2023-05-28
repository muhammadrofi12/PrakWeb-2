<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\FormInputController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\ProdukController;
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

Route::get('/salam', function () {
    return "Hallo, selamat datang.";
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About me.",
        "nama" => "Muhammad Rofi",
        "umur" => 15,
        "email" => "muhammadrofi062@gmail.com"
    ]);
});

Route::get('/about_nf', function () {
    return view('about_nf');
});

Route::get('/form_medis', function () {
    return view('form_medis');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/form_mahasiswa', [FormInputController::class, 'index']);
Route::post('/hasil', [FormInputController::class, 'data']);


// ini route tampilan admin backend
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});


// ini route tampilan frontend
Route::prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardUserController::class, 'index']);
    Route::get('/about', [DashboardUserController::class, 'about']);
});
