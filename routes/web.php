<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
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
Route::get('/', [LandingController::class, 'getIndexPage'])->name('home');
Route::get('/commodity_auction', [LandingController::class, 'getCommodityAuctionPage'])->name('commodity_auction');

Route::get('/user_register', [UserController::class, 'getUserRegistrationPage'])->name('user_registration');
Route::get('/user_login', [UserController::class, 'getUserLoginPage'])->name('user_login');
Route::get('/user_dashboard', [UserController::class, 'getUserDashboard'])->name('user_dashboard');
Route::post('user_signup', [UserController::class, 'userSignup'])->name('user_signup');
Route::post('user_signin', [UserController::class, 'userSignin'])->name('user_signin');
Route::post('user_update', [UserController::class, 'userProfileUpdate'])->name('user_update');
Route::get('user_logout', [UserController::class, 'userLogout'])->name('user_logout');
Route::get('/user_products', [UserController::class, 'getUserProducts'])->name('user_products');
Route::get('/user_purchase', [UserController::class, 'getUserPurchase'])->name('user_purchase');
Route::post('/add_product', [UserController::class, 'addNewProduct'])->name('add_product');
Route::get('/add_bid', [UserController::class, 'addBidToProduct'])->name('add_bid');
Route::get('/complete_bidding/{id}', [UserController::class, 'completeBiddingProcess'])->name('complete_bidding_process');
Route::get('/get_current_bid', [UserController::class, 'getCurrentBid'])->name('get_current_bid');

Route::get('/find_data', [AdminController::class, 'manipulatejson'])->name('json');
Route::get('/cricket_auction', function () {
    return view('cricket_auction');
})->name('cricket_auction');
Route::get('/player_registration', function () {
    return view('player_registration');
})->name('player_registration');
Route::get('/player_login', function () {
    return view('player_login');
})->name('player_login');
Route::get('/player_dashboard', function () {
    return view('player_dashboard');
})->name('player_dashboard');
Route::get('/team_login', function () {
    return view('team_login');
})->name('team_login');
Route::get('/team_dashboard', function () {
    return view('team_dashboard');
})->name('team_dashboard');
Route::get('/auction', function () {
    return view('auction');
})->name('auction');


Route::prefix('admin')->name('admin.')->middleware(['is_admin_loggedin:admin'])->group(function () {
  Route::get('/login', [AdminController::class, 'getAdminLoginPage'])->name('login');
  Route::post('/signin', [AdminController::class, 'adminSignin'])->name('signin');
  Route::get('/dashboard', [AdminController::class, 'getAdminDashboard'])->name('dashboard');
  Route::get('/products', [AdminController::class, 'getAllProducts'])->name('products');
  Route::get('/verify-products/{id}', [AdminController::class, 'verifyProducts'])->name('verify-products');
  Route::post('/add_for_auction', [AdminController::class, 'addProductForAuction'])->name('add_for_auction');
  Route::get('/commodity_auction', [AdminController::class, 'getAuctionProducts'])->name('commodity_auction');

});
