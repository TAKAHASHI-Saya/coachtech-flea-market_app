<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;


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

Route::get('/', [ProductController::class, 'index'])->name('product');
Route::get('/item/{item_id}', [ProductController::class, 'show'])->name('detail');

Route::middleware('auth')->group(function()
{
    Route::get('/setting_profile', [AuthController::class, 'showSettingProfile']);
    Route::patch('/update', [AuthController::class, 'update'])->name('update');
    Route::post('/item/{item_id}/comment', [CommentController::class, 'store']);
    Route::post('/item/{item_id}/like', [LikeController::class, 'toggle']);
});
