<?php

use Illuminate\Support\Facades\Route;
// use App\User;

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

Route::get('/welcome', function () {
    // $usuarios = User::find(1);
     return view('welcome');
});

// Route::get('status', function(){

//         $users   = App\User::all();
//         $message = filter_input(\INPUT_GET, 'm');
//         Notification::send($users, new App\Notifications\TextNotification($message));

// })->middleware('auth');

Route::get('status', 'StatusController@usuarios')->name('status');

// Route::get('statusnew', 'StatusController@usuarios');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
