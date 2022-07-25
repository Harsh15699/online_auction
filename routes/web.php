<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlayerController;
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
Route::get('/user_wallet', [UserController::class, 'getUserWallet'])->name('user_wallet');
Route::get('/add_bid', [UserController::class, 'addBidToProduct'])->name('add_bid');
Route::get('/complete_bidding/{id}', [UserController::class, 'completeBiddingProcess'])->name('complete_bidding_process');
Route::get('/get_current_bid', [UserController::class, 'getCurrentBid'])->name('get_current_bid');
Route::get('/change_user_wallet', [UserController::class, 'changeUserWallet'])->name('change_user_wallet');
Route::get('/team_login', [TeamController::class, 'teamSignin'])->name('team_login');
Route::post('/team_signin', [TeamController::class, 'teamPostSignin'])->name('team_signin');
Route::get('/team_dashboard', [TeamController::class, 'getTeamDashboard'])->name('team_dashboard');
Route::get('/auction', [TeamController::class, 'getAuctionPage'])->name('auction');
Route::get('team_logout', [TeamController::class, 'teamLogout'])->name('team_logout');
Route::get('/find_data', [AdminController::class, 'manipulatejson'])->name('json');
Route::get('/player_registration', [PlayerController::class, 'getPlayerRegistrationPage'])->name('player_registration');
Route::post('player_signup', [PlayerController::class, 'playerSignup'])->name('player_signup');
Route::get('player_login', [PlayerController::class, 'getPlayerLoginPage'])->name('player_login');
Route::post('player_signin', [PlayerController::class, 'playerSignin'])->name('player_signin');
Route::get('player_logout', [PlayerController::class, 'playerLogout'])->name('player_logout');
Route::get('/player_dashboard', [PlayerController::class, 'getPlayerDashboard'])->name('player_dashboard');
Route::get('/complete_cricket_bidding/{id}', [TeamController::class, 'completeCricketBiddingProcess'])->name('complete_cricket_bidding_process');
Route::get('/add_bid_cricket', [TeamController::class, 'addBidToPlayer'])->name('add_bid_cricket');
Route::get('/get_current_player_bid', [TeamController::class, 'getCurrentPlayerBid'])->name('get_current_player_bid');
Route::get('/cricket_auction', function () {
    return view('cricket_auction');
})->name('cricket_auction');


Route::get('razorpay-payment', [PaymentController::class, 'index']);
Route::post('razorpay-payment', [PaymentController::class, 'store'])->name('razorpay.payment.store');


Route::prefix('admin')->name('admin.')->middleware(['is_admin_loggedin'])->group(function () {
  Route::get('/dashboard', [AdminController::class, 'getAdminDashboard'])->name('dashboard');
  Route::get('/products', [AdminController::class, 'getAllProducts'])->name('products');
  Route::get('/verify-products/{id}', [AdminController::class, 'verifyProducts'])->name('verify-products');
  Route::post('/add_for_auction', [AdminController::class, 'addProductForAuction'])->name('add_for_auction');
  Route::get('/commodity_auction', [AdminController::class, 'getAuctionProducts'])->name('commodity_auction');
  Route::get('/users', [AdminController::class, 'getAllUsers'])->name('users');
  Route::get('/teams', [AdminController::class, 'getAllTeams'])->name('teams');
  Route::get('/players', [AdminController::class, 'getAllPlayers'])->name('players');
  Route::get('/verify-users/{id}', [AdminController::class, 'verifyUsers'])->name('verify-users');
  Route::get('/verify-players/{id}', [AdminController::class, 'verifyPlayers'])->name('verify-players');
  Route::post('/add_player_for_auction', [AdminController::class, 'addPlayerForAuction'])->name('add_player_for_auction');
  Route::get('/cricket_auction', [AdminController::class, 'getAuctionPlayers'])->name('cricket_auction');
  Route::get('/logout', [AdminController::class, 'adminLogout'])->name('logout');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'getAdminLoginPage'])->name('login');
    Route::post('/signin', [AdminController::class, 'adminSignin'])->name('signin');
  });
