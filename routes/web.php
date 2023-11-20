<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'test')->name('adminpage.index');
});

Route::get('/menu', function () {
    return view('menu');
});

// Route::get('welcome', function () {
//     return view('welcome');
// });

Route::get('/admin/menu', function () {
    return view('adminpage.menu');
});

Route::get('/admin/menu/add', function () {
    return view('adminpage.addmenu');
});

Route::get('/admin/menu/edit', function () {
    return view('adminpage.editmenu');
});
