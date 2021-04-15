<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserTableController;
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
    return view('pages.home');
});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [PagesController::class, 'index']);
// Route::get('/', 'PagesController@index') ;
Route::get('/about',function(){
    return view('pages.about');
});
Route::resource('todo', UserTableController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
