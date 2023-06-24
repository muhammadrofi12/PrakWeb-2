<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\FormInputController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

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

// untuk security agar harus melalui proses login/register terlebih dahulu
// dengan middleware('auth)
// ini route tampilan admin backend
Route::group(['middleware' => ['auth', 'peran:admin-manager']], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);

        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

        Route::get('/kategoriProduk', [KategoriProdukController::class, 'index']);
        Route::get('/kategoriProduk/create', [KategoriProdukController::class, 'create']);
        Route::post('/kategoriProduk/store', [KategoriProdukController::class, 'store']);
        Route::get('/kategoriProduk/edit/{id}', [KategoriProdukController::class, 'edit']);
        Route::post('/kategoriProduk/update/{id}', [KategoriProdukController::class, 'update']);
        Route::get('/kategoriProduk/delete/{id}', [KategoriProdukController::class, 'destroy']);

        Route::get('/pesanan', [PesananController::class, 'index']);
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
    });

});


// ini route tampilan frontend
Route::prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardUserController::class, 'index']);
    Route::get('/about', [DashboardUserController::class, 'about']);
});

Route::get('/frontend', function () {
    return view('frontend');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
