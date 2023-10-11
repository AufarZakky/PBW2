<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CollectionController;
use GuzzleHttp\Promise\Create;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Aufar Hadni Azzakky
6706223109 - 4603
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::post('/userStore', [RegisteredUserController::class, 'store'])->name('user.store');
    Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna');
    Route::get('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');
    Route::get('/userView/{username}', [UserController::class, 'showUser'])->name('user.infoPengguna');

    Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.store');
    Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi.daftarKoleksi');
    Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
    Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
