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

Route::get('/events', 'EventController@index')->name('event_list');

Route::get('/events/create', 'EventController@create')->name('event_create');
Route::post('/events/create', 'EventController@store')->name('event_store');
 
Route::get('/events/edit/{EventsID}', 'EventController@edit')->name('event_edit');
Route::post('/events/edit/{EventsID}', 'EventController@update')->name('event_update');

Route::delete('/events/delete/{EventsID}', 'EventController@delete')->name('event_delete');
