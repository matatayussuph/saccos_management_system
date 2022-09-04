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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

///////////////////to be modified
Route::get('/dashboard', function () {
    return view('dashboard');//partially added by richard -> not secure
});
Route::get('/terms', function () {
    return view('terms');//partially added by richard -> not secure
});
Route::get('/policy', function () {
    return view('policy');//partially added by richard -> not secure
});
///////////////////

Route::group(['middleware' => ['auth']], function() {

    /**
    * Verification Routes
    */
    Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
  
});