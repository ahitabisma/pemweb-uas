<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PengirimController;

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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [SuratController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Surat
    Route::get('/create', [SuratController::class, 'create']);
    Route::post('/store', [SuratController::class, 'store']);
    Route::get('/edit/{surats:id}', [SuratController::class, 'edit']);
    Route::put('/update/{surat:id}', [SuratController::class, 'update']);
    Route::delete('/destroy/{surats:id}', [SuratController::class, 'destroy']);

    // Penerima
    Route::get('/penerima', [PenerimaController::class, 'index']);
    Route::get('/penerima/create', [PenerimaController::class, 'create']);
    Route::post('/penerima/store', [PenerimaController::class, 'store']);
    Route::get('/penerima/edit/{penerimas:id}', [PenerimaController::class, 'edit']);
    Route::put('/penerima/update/{penerima:id}', [PenerimaController::class, 'update']);
    Route::delete('/penerima/destroy/{penerimas:id}', [PenerimaController::class, 'destroy']);

    // Pengirim
    Route::get('/pengirim', [PengirimController::class, 'index']);
    Route::get('/pengirim/create', [PengirimController::class, 'create']);
    Route::post('/pengirim/store', [PengirimController::class, 'store']);
    Route::get('/pengirim/edit/{pengirims:id}', [PengirimController::class, 'edit']);
    Route::put('/pengirim/update/{pengirim:id}', [PengirimController::class, 'update']);
    Route::delete('/pengirim/destroy/{pengirims:id}', [PengirimController::class, 'destroy']);

    // Kategori Surat
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/create', [KategoriController::class, 'create']);
    Route::post('/kategori/store', [KategoriController::class, 'store']);
    Route::get('/kategori/edit/{kategoris:id}', [KategoriController::class, 'edit']);
    Route::put('/kategori/update/{kategori:id}', [KategoriController::class, 'update']);
    Route::delete('/kategori/destroy/{kategoris:id}', [KategoriController::class, 'destroy']);
});


require __DIR__ . '/auth.php';
