<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [AppController::class, 'index'])->name('index');

Route::post('/download', [AppController::class, 'download'])->name('download');


Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::as('dashboard.')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/stamp/search', [DashboardController::class, 'search'])->name('stamp.search');
        Route::resource('/page', PageController::class);
        Route::resource('/stamp', DashboardController::class);
    });
});




require __DIR__ . '/auth.php';
