<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
    return view('welcome');
});


/*
 * pages ДЗ №1
 */

Route::get('/users', function () {
    return "Welcome! You have to login! ";
});

Route::get('/users/{name}', function (string $name) {
    return "Welcome $name!";
})->where('name','[A-Za-z]+');

Route::get('/news', function () {
    return "List of news";
});

Route::get('/news/{id}', function (int $id) {
    return "You see news number $id!";
})->where('id','[0-9]+');
