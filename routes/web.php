<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['except'=>'login']);

Route::post('logout', function(){
    Auth::logout();
    return redirect()->route('login.3kr');
})->name('logout');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login_view'])->name('login.3kr.view');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login_3kr'])->name('login.3kr');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
