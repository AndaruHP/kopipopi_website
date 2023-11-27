<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardBannerController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardCategoryController;

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
// ROute::get('/tes', function () {
//     return view('dashboard.layout.ed');
// });
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');
Route::resource('/dashboard/menus', DashboardMenuController::class)->middleware('auth')->except(['show']);
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('auth')->except(['show']);
Route::resource('/dashboard/banners', DashboardBannerController::class)->middleware('auth')->except(['show']);
Route::get('/review', [ReviewController::class, 'create'])->name('review.create');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
Route::get('/dashboard/review', [ReviewController::class, 'index']);
Route::delete('/dashboard/review/{rating}', [ReviewController::class, 'destroy']);
Route::get('/dashboard/contact', [DashboardContactController::class, 'index'])->name('dashboard.contact')->middleware('auth');
Route::get('/dashboard/contact/create', [DashboardContactController::class, 'create'])->name('dashboard.contact.create');
Route::post('/dashboard/contact', [DashboardContactController::class, 'store']);
Route::delete('/dashboard/contact/{contact}', [DashboardContactController::class, 'destroy']);
Route::resource('/dashboard/galleries', GalleryController::class)->middleware('auth');
