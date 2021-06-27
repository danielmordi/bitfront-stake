<?php

use App\Http\Middleware\authCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\TransactionLogController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    // ADMIN
    Route::group(['middleware' => 'App\Http\Middleware\authCheck:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [HomeController::class, 'admin'])->name('dashboard');
        Route::get('packages', [PackageController::class, 'index'])->name('packages');
        Route::post('packages', [PackageController::class, 'store'])->name('packages.store');
        Route::get('packages/{id}', [PackageController::class, 'edit'])->name('packages.edit');
        Route::patch('packages/{id}', [PackageController::class, 'update'])->name('packages.update');
        Route::delete('packages/{id}', [PackageController::class, 'destroy'])->name('packages.delete');
        Route::get('coin', [CoinController::class, 'index'])->name('coin');
        Route::post('coin', [CoinController::class, 'store'])->name('coin.store');
        Route::get('coin/{id}', [CoinController::class, 'edit'])->name('coin.edit');
        Route::patch('coin/{id}', [CoinController::class, 'update'])->name('coin.update');
        Route::delete('coin/{id}', [CoinController::class, 'destroy'])->name('coin.delete');
        Route::get('depositlog', [TransactionLogController::class, 'depositlog'])->name('depositlog');
        Route::get('deposit/confirm/{id}', [TransactionLogController::class, 'confirm'])->name('confirmDeposit');
        Route::get('withdrawalog', [TransactionLogController::class, 'withdrawalog'])->name('withdrawalog');
        Route::get('withdrawalog/confirm/{id}', [TransactionLogController::class, 'confrimWithdrawal'])->name('confirmWithdrawal');
        Route::get('user/{id}', [AdminController::class, 'viewUser'])->name('view.user');
        Route::patch('user/view/update/wb/{id}', [AdminController::class, 'walletBal'])->name('update.wallet');
        Route::patch('user/view/update/bonus/{id}', [AdminController::class, 'bonus'])->name('update.bonus');
        Route::patch('user/view/update/hr/{id}', [AdminController::class, 'hashRate'])->name('update.hash-rate');
    });

    // USER
    Route::group(['middleware' => 'App\Http\Middleware\authCheck:user', 'prefix' => 'account', 'as' => 'user.'], function () {
        Route::get('/', [HomeController::class, 'user'])->name('dashboard');
        Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
        Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');
        Route::get('/deposit/info/{id}', [DepositController::class, 'showDepositInfo'])->name('deposit.info');
        Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw');
        Route::post('/withdraw', [WithdrawController::class, 'store'])->name('withdraw.store');
        Route::get('/mining', [PackageController::class, 'packageView'])->name('mining');
        Route::get('/referrals', [ReferralController::class, 'index'])->name('referrals');
    });
});
