<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

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
Route::group(['middleware' => ['XssSanitizer']], function () {

    Route::get('/','User@index');
    Route::get('/news','User@news');

    Route::get('/about','User@about');
    Route::get('/contact','User@contact');

    Route::view('/signup','signup');
    Route::post('/signupsubmit','User@signupsubmit');

    Route::view('/login','login');
    Route::post('/loginsubmit','User@loginsubmit');

    Route::get('/order','User@order');
    Route::post('/ordersubmit','User@ordersubmit');

    Route::get('/odetails','User@odetails');
    Route::post('/odetailssubmit','User@odetailssubmit');
    Route::post('/odetailsdelete','User@odetailsdelete');

    Route::get('/checkout','User@checkout');
    Route::get('/logout',function(){
        session()->flush();
        return redirect('/');
    });
});



