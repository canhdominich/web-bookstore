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

use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\CheckoutController;
use App\Http\Controllers\Customer\LoginController as CustomerLoginController;
use App\Http\Controllers\Customer\LogoutController as CustomerLogoutController;
use App\Http\Controllers\Customer\RegisterController;
use App\Http\Controllers\Customer\AccountController;
use App\Http\Controllers\Customer\ChangePasswordController;
use App\Http\Controllers\Customer\WishlistController;
use App\Http\Controllers\Customer\OrderHistoryController;

Route::get('/', function () {
    return view('home');
});

// login
Route::get('/login', function () {
    return view('login');
});

// logout
Route::get('/logout', [CustomerLogoutController::class, 'logout']);

// singin
Route::post('/login', [CustomerLoginController::class, 'postLogin']);

// singup
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [RegisterController::class, 'register']);

// // xac minh so dien thoai
// Route::get('/confirm/otp', 'Customer\RegisterController@formConfirmOtp');
// Route::post('/confirm/otp', 'Customer\RegisterController@confirmOtp');
// // gui lai ma otp 
// Route::get('/resend/otp', 'Customer\RegisterController@resendOtp');

// // cap nhat thong tin
// Route::get('/fulfill/information', 'Customer\RegisterController@fulfill');

// // tao tai khoan
// Route::post('/create/account', 'Customer\RegisterController@createAccount');

// // quen mat khau
// Route::get('/forgot/password', 'Customer\ForgotPasswordController@formForgotPassword');
// Route::post('/cofirm/phone', 'Customer\ForgotPasswordController@confirmPhone');
// // xac minh so dien thoai trong quen mat khau
// Route::get('/forgot/password/confirm/otp', 'Customer\ForgotPasswordController@formConfirmOtp');
// Route::post('/forgot/password/confirm/otp', 'Customer\ForgotPasswordController@confirmOtp');


// cart
Route::post('/add/item', [CartController::class, 'addSpecialItem']);
Route::get('/checkout/cart', [CartController::class, 'index']);
Route::post('/checkout/cart', [CartController::class, 'addItem']);
Route::delete('/remove-cart/{id}', [CartController::class, 'remove']);
Route::get('/clear/cart', [CartController::class, 'clearCart']);
// increment
Route::post('/increment/cart', [CartController::class, 'increment']);
// decrement
Route::post('/decrement/cart', [CartController::class, 'decrement']);
Route::get('/checkout/cart/item/number', [CartController::class, 'getItemNumber']);

// checkout payment
Route::get('/checkout/payment', [CheckoutController::class, 'index']);
Route::post('/checkout/payment', [CheckoutController::class, 'order']);

// order-received
Route::get('/checkout/order-received/{order_id}', [CheckoutController::class, 'orderReceived']);


Route::group(['prefix' => '/', 'middleware' => 'CheckUserLogin'], function () {
    // my account
    Route::get('/my/account/{user_id}', [AccountController::class, 'myAccount']);
    // update account information
    Route::post('/my/account', [AccountController::class, 'updateMyAccount']);
    // change password
    Route::get('/change/password', [ChangePasswordController::class, 'getFormChangePassword']);
    Route::post('/change/password', [ChangePasswordController::class, 'changePassword']);
    // wishlist
    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::get('/remove-wishlist/{product_id}', [WishlistController::class, 'delete']);
    // my orders
    Route::get('/order/history/{user_id}', [OrderHistoryController::class, 'myOrder']);
    // order detail 
    Route::get('/order/detail/{user_id}', [OrderHistoryController::class, 'myOrderDetail']);
});

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
