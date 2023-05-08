<?php

use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TingkatanController;
use App\Http\Controllers\Admin\UnitsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnitController;
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
Route::get('/', HomeController::class)->name('home');
Route::get('/unit-ranting-pelatihan', [UnitController::class, 'index'])->name('unit');

Route::group(['middleware' => ['role:SuperAdmin']], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('unit-ranting', UnitsController::class);
    Route::resource('anggota', AnggotaController::class);
    Route::resource('tingkatan-angkota', TingkatanController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
