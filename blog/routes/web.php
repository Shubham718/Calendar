<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Managing Google accounts.
Route::name('google.index')->get('google', 'GoogleAccountController@index');
Route::name('google.store')->get('google/oauth', 'GoogleAccountController@store');
Route::name('google.destroy')->delete('google/{googleAccount}', 'GoogleAccountController@destroy');

// Route::get('/calendar', 'CalendarController@calendar');
Route::get('/calendar/new', 'CalendarController@getNewEventForm');
Route::post('/calendar/new', 'CalendarController@createNewEvent');
