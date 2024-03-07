<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;

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
    return view('frontend.index');
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

// Home Slide Route
Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::prefix('home')->group(function () {
        Route::controller(HomeSlideController::class)->group(function () {
            Route::get('slide','HomeSlider')->name('home.slide');
            Route::post('update/slide','UpdateSlider')->name('update.slide');
        });
    });  
});


// About Page Route
Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::prefix('about')->group(function () {
        Route::controller(AboutController::class)->group(function () {
            Route::get('view','AboutPage')->name('about.page');
            Route::post('update','UpdateAbout')->name('update.about');

            Route::get('multi/image/add','AddMultiImage')->name('add.multi.image');
            Route::post('store/multi/image','StoreMultiImage')->name('store.multi.image');
            Route::get('view/multi/image','ViewMultiImage')->name('view.multi.image');
            Route::get('edit/multi/image/{id}','EditMultiImage')->name('multi.image.edit');
            Route::post('update/multi/image/{id}','UpdateMultiImage')->name('update.multi.image');
            Route::get('delete/multi/image/{id}','DeleteMultiImage')->name('multi.image.delete');

            Route::get('education/view','AboutEducation')->name('education.view');
            Route::get('education/add','AddAboutEducation')->name('education.add');
            Route::post('education/store','StoreAboutEducation')->name('store.education');
            Route::get('education/edit/{id}','EditAboutEducation')->name('education.edit');
            Route::post('education/update','UpdateAboutEducation')->name('update.education');
            Route::get('education/delete/{id}','DeleteAboutEducation')->name('education.delete');

            Route::get('award/view','AboutAward')->name('award.view');
            Route::get('award/add','AddAward')->name('award.add');
            Route::post('award/store','StoreAward')->name('store.award');
            Route::get('award/edit/{id}','EditAward')->name('award.edit');
            Route::post('award/update','UpdateAward')->name('update.award');
            Route::get('award/delete/{id}','DeleteAward')->name('award.delete');
        });
    });  
});



// FrontEnd Menu Link for About
Route::get('about',[AboutController::class, 'HomeAbout'])->name('about.menu');



// Portfolio All Route
Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::prefix('portfolio')->group(function () {
        Route::controller(PortfolioController::class)->group(function () {
            Route::get('view','ViewPortfolio')->name('view.portfolio');
            Route::get('add','AddPortfolio')->name('add.portfolio');
            Route::post('store','StorePortfolio')->name('store.portfolio');
            Route::get('edit/{id}','EditPortfolio')->name('portfolio.edit');
            Route::post('update','UpdatePortfolio')->name('update.portfolio');
            Route::get('delete/{id}','DeletePortfolio')->name('portfolio.delete');
        });
    });  
});

