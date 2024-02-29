<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('admin/index');
})->middleware(['auth', 'verified','prevent-back-history'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





// User defined routes
Route::middleware(['auth','prevent-back-history'])->group(function() {
    Route::prefix('admin')->group(function() {
        Route::controller(AdminController::class)->group(function() {
            Route::get('logout', 'Logout')->name('admin.logout');
            Route::get('profile', 'Profile')->name('admin.profile');
        });
    });
});


Route::post('store/profile', [AdminController::class, 'StoreProfile'])->name('store.profile');
Route::post('update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');

