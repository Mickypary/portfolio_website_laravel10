<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;

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

// Home Route
Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::prefix('home')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('slide','HomeSlider')->name('home.slide');
            Route::post('update/slide','UpdateSlider')->name('update.slide');

            Route::get('view/partner','Partner')->name('view.partner');
            Route::post('update/partner','UpdatePartner')->name('update.partner');
            Route::get('upload/partner/image','PartnerImage')->name('upload.partner.image');
            Route::get('add/partner/image','AddPartnerImage')->name('partner.image.add');
            Route::post('store/partner/image','StorePartnerImage')->name('store.partner.image');
            Route::get('edit/partner/image/{id}','EditPartnerImage')->name('partner.image.edit');
            Route::post('update/partner/image','UpdatePartnerImage')->name('update.partner.image');
            Route::get('delete/partner/image/{id}','DeletePartnerImage')->name('partner.image.delete');

            Route::get('client/feedback','ClientFeedback')->name('client.feedback');
            Route::get('client/feedback/add','ClientFeedbackAdd')->name('client.feedback.add');
            Route::post('client/feedback/store','ClientFeedbackStore')->name('store.client.feedback');
            Route::get('client/feedback/edit/{id}','ClientFeedbackEdit')->name('edit.client.feedback');
            Route::post('client/feedback/update','ClientFeedbackUpdate')->name('update.client.feedback');
            Route::get('client/feedback/delete/{id}','ClientFeedbackDelete')->name('delete.client.feedback');
            Route::get('client/image','ClientImage')->name('client.image');
            Route::get('client/image/add','ClientImageAdd')->name('client.image.add');
            Route::post('client/image/store','ClientImageStore')->name('store.client.image');
            Route::get('client/image/edit/{id}','ClientImageEdit')->name('client.image.edit');
            Route::post('client/image/update','ClientImageUpdate')->name('update.client.image');
            Route::get('client/image/delete/{id}','ClientImageDelete')->name('client.image.delete');

            Route::get('all/service','AllService')->name('all.service');
            Route::get('add/service','AddService')->name('add.service');
            Route::post('store/service','StoreService')->name('store.service');
            Route::get('edit/service/{id}','EditService')->name('edit.service');
            Route::post('update/service','UpdateService')->name('update.service');
            
            


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
Route::get('service/details/{id}', [HomeController::class, 'ServiceDetails'])->name('service.details');
Route::get('service/details', [HomeController::class, 'ServiceDetailsMenu'])->name('service.details.menu');
Route::get('portfolio/details/{id}', [PortfolioController::class, 'PortfolioDetails'])->name('portfolio.details');
Route::get('portfolio/all', [PortfolioController::class, 'AllPortfolio'])->name('portfolio.menu');



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




// Blog Category All Route
Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::prefix('blog')->group(function () {
        Route::controller(BlogCategoryController::class)->group(function () {
            Route::get('category/all','AllBlogCategory')->name('all.blog.category');
            Route::get('category/add','AddBlogCategory')->name('add.blog.category');
            Route::post('category/store','StoreBlogCategory')->name('store.blog.category');
            Route::get('category/edit/{id}','EditBlogCategory')->name('edit.blog.category');
            Route::post('category/update','UpdateBlogCategory')->name('update.blog.category');
            Route::get('category/delete/{id}','DeleteBlogCategory')->name('delete.blog.category');
        });
    });  
});



// Blog All Route
Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::prefix('blog')->group(function () {
        Route::controller(BlogController::class)->group(function () {
            Route::get('all','AllBlog')->name('all.blog');
            Route::get('add','AddBlog')->name('add.blog');
            Route::post('store','StoreBlog')->name('store.blog');
        });
    });  
});

