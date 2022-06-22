<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;

use \App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

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
    return view('home');
})->name('home');

Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
    Route::get('/', [CategoriesController::class,'show'] );
    Route::get('/{categoryId}', [NewsController::class,'show'] )
    ->name('item');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', AdminIndexController::class);
    Route::resource('/categories', AdminCategoryController::class)
        ->name('index','categories');
    Route::resource('/news', AdminNewsController::class)
        ->name('index','news');;
});

Route::get('/news', [NewsController::class, 'show'])
    ->name('news');

Route::get('/news/{id}', [NewsController::class, 'showById'])
    ->where('id', '\d+')
    ->name('news.item');

Route::group(['prefix'=>'user','as'=>'user.'],function(){
    Route::get('/',function (){
        return "User page";
    })
        ->name('login');
    Route::get('/login',[UserController::class,'login'])
        ->name('login');
});

Route::get('/feedback', [FeedbackController::class, 'index'])
    ->name('feedback');

Route::get('/order', [OrderController::class, 'index'])
    ->name('order');

Route::post('/feedback', [FeedbackController::class, 'store'])
    ->name('feedback');

Route::post('/order', [OrderController::class, 'store'])
    ->name('order');

