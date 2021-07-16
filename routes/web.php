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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('home');
//Route::get('/admin/companyCreate', [App\Http\Controllers\Admin\CompanyController::class, 'create'])->name('create');
Route::group([
    'prefix' => 'admin',
//    'as' => 'company.',
//    'namespace' => 'Banners',
//    'middleware' => [App\Http\Middleware\FilledProfile::class],
], function () {
Route::resource('company', App\Http\Controllers\Admin\CompanyController::class);

});
Route::group([
    'prefix' => 'admin',
//    'as' => 'company.',
//    'namespace' => 'Banners',
//    'middleware' => [App\Http\Middleware\FilledProfile::class],
], function () {
    Route::resource('clients', App\Http\Controllers\Admin\ClientsController::class);

});
//Route::resource('/admin/company/store', App\Http\Controllers\Admin\CompanyController::class);
//Route::get('/admin/company/store', [App\Http\Controllers\Admin\CompanyController::class, 'store'])->name('store');
//Route::get('/admin/company', [App\Http\Controllers\Admin\CompanyController::class, 'index'])->name('index');
