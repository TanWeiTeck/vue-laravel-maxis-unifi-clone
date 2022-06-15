<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\TelcoController;
use App\Http\Controllers\User\UnifiController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\VerificationController;

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
    return view(".home");
})->name('home');

Route::get('/maxis', [TelcoController::class, "maxis_index"])->name('maxishome');
Route::get('/maxis/apply', [TelcoController::class, "maxis_apply"])->name('maxisapply');

Route::get('/unifi', [TelcoController::class, "unifi_index"])->name('unifihome');
Route::get('/unifi/apply', [TelcoController::class, "unifi_apply"])->name('unifiapply');

Route::post('/apply', [TelcoController::class, "doCreate"])->name('apply');




Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'handle'])->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/logout', [LogoutController::class, 'handle'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/applications/list', [ApplicationController::class, 'index'])->name('applications.list');
    Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
    Route::post('/applications/doCreate', [ApplicationController::class, 'doCreate'])->name('applications.doCreate');
    Route::get('/applications/edit/{id}', [ApplicationController::class, 'edit'])->name('applications.edit');
    Route::post('/applications/doUpdate/{id}', [ApplicationController::class, 'doUpdate'])->name('applications.doUpdate');
    Route::get('/applications/delete/{id}', [ApplicationController::class, 'doDelete'])->name('applications.doDelete');

    Route::get('/packages/list', [PackageController::class, 'index'])->name('packages.list');
    Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');
    Route::post('/packages/doCreate', [PackageController::class, 'doCreate'])->name('packages.doCreate');
    Route::get('/packages/show/{id}', [PackageController::class, 'show'])->name('packages.show');
    Route::post('packages/edit/{id}', [PackageController::class, 'doUpdate'])->name('packages.doUpdate');
    Route::get('packages/delete/{id}', [PackageController::class, 'doDelete'])->name('packages.doDelete');

    Route::get('/filter', [ApplicationController::class, "filter"])->name('filter');
});
