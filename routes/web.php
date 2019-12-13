<?php

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
    return view('home');
});

Auth::routes();
Route::get('/', 'AnimalController@index');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/animal', 'AnimalController@showAnimal' )->name('animal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route ::group(['middleware'=>['auth']],function(){
    Route::get('/createAnimal', 'AnimalController@create' )->name('createAnimal');

    Route::post('/storeAnimal', 'AnimalController@store' )->name('storeAnimal');


    Route::post('/editAnimal/{id}', 'AnimalController@edit' )->name('editAnimal');
    Route::post('/updateAnimal/{id}', 'AnimalController@update' )->name('updateAnimal');
    Route::post('/deleteAnimal/{id}', 'AnimalController@delete' )->name('deleteAnimal');



});
