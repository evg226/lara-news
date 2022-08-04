<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

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
    return view('index');
})->name('home');

Route::group(['prefix' => 'categories', 'as' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::group(['prefix' => '{category}'], function () {
        Route::get('/', [CategoryController::class, 'show'])
            ->name('.show');
        Route::get('/news', [CategoryController::class, 'show'])
            ->name('.news');
        Route::get('/news/{news}', [NewsController::class, 'show'])
            ->name('.news.item');
    });
});

Route::group(['middleware'=>'auth'], function (){
    Route::group(['prefix' => 'admin', 'middleware'=>'admin', 'as' => 'admin.'], function () {
        Route::get('/', AdminIndexController::class);
        Route::resource('/categories', AdminCategoryController::class)
            ->name('index', 'categories');
        Route::resource('/news', AdminNewsController::class)
            ->name('index', 'news');
        Route::resource('/feedbacks', AdminFeedbackController::class)
            ->name('index', 'feedbacks');
        Route::resource('/orders', AdminOrderController::class)
            ->name('index', 'orders');
    });
});

Route::get('/news/{id}', [NewsController::class, 'showById'])
    ->where('id', '\d+')
    ->name('news.item');

Route::get('/feedback', [FeedbackController::class, 'index'])
    ->name('feedback');

Route::get('/order', [OrderController::class, 'index'])
    ->name('order');

Route::post('/feedback', [FeedbackController::class, 'store'])
    ->name('feedback');

Route::post('/order', [OrderController::class, 'store'])
    ->name('order');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
