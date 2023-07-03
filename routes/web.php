<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Surat
    Route::get('/', [SuratController::class, 'index']);
    Route::get('/create', [SuratController::class, 'create']);
    Route::post('/store', [SuratController::class, 'store']);
    Route::get('/edit/{surats:id}', [SuratController::class, 'edit']);
    Route::put('/update/{surats:id}', [SuratController::class, 'update']);
    Route::delete('/destroy/{surats:id}', [SuratController::class, 'destroy']);

    // Kategori Surat
    Route::get('/kategori', [KategoriController::class, 'index']);
});


require __DIR__ . '/auth.php';
