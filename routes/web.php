<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\AuthAdmin\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BookController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Create route for admin dashboard
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/table', function () {
    return view('admin.basic-table');
});


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm']);
    Route::post('/login', [LoginController::class, 'postLoginAdmin']);
    Route::get('/logout', [LoginController::class, 'logoutAdmin']);

    // categories
    Route::resource('category', CategoryController::class);
    Route::post('/update-category', [CategoryController::class, 'edit']);
    Route::get('/new/category', function () {
        return view('admin.category.new-category');
    });

    // books
    Route::resource('book', BookController::class);
    Route::post('/update-book', [BookController::class, 'edit']);
    Route::get('/new/book', function () {
        return view('admin.book.new-book');
    });
});
