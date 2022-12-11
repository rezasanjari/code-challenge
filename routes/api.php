<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('users')->group(function () {
    Route::post('', [UserController::class, 'store'])->name('user.store');
    Route::get('{user}', [UserController::class, 'show'])->name('user.show');
    Route::put('{user}', [UserController::class, 'update'])->name('user.update');
});
