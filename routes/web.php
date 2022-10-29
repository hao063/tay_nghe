<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampaignController;

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
    return view('login');
})->name('view.login');

// route login
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// sét cho tài khoản
Route::get('/set-password/{id}',[UserController::class, 'setPassword'])->name('setPassword');


// Trang quản lý chiến dịch
Route::group([ 'prefix' => 'campaign', 'as' => 'campaign.'], function () {
    Route::get('index', [CampaignController::class, 'index'])->name('index');
    Route::get('create', [CampaignController::class, 'create'])->name('create');
});
