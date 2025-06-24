<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Abouts routes
Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('abouts.edit');
Route::patch('/admin/abouts', [AboutController::class, 'update'])->name('abouts.update');
// Media routes
Route::get('/admin/medias', [MediaController::class, 'index'])->name('medias.index');
Route::post('/admin/medias', [MediaController::class, 'store'])->name('medias.store');
Route::delete('/admin/medias/{media}', [MediaController::class, 'destroy'])->name('medias.destroy');
// Services routes
Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');

Route::get('/{any}', function () {
    return view('notFoundPage');
})->where('any', ".*");
