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
// Frontend
Route::get('/', 'HomeController@index')
        ->name('landingpage');

Route::post('/', 'HomeController@create')
        ->name('landingpage-create');

Route::get('/privacy-policy', 'PrivacypolicyController@index')
        ->name('privacy-policy');

Route::get('/terms-&-conditions', 'TermsController@index')
        ->name('terms-&-conditions');


// Backend
Route::prefix('admin')
        ->middleware('auth')
        ->namespace('admin')
        ->group(function(){
                Route::get('/', 'DashboardController@index')
                        ->name('dashboard');
                
                Route::get('pesan','PesanController@index')
                        ->name('pesan');
                Route::get('pesanexport','PesanController@messageexport')
                        ->name('pesanexport');
        });
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');