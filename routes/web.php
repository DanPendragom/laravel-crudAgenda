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
    return view('contatos.create');
});

Route::resource('/contacts','Contacts', ['except' => ['destroy']]);    

Route::get('/contacts/{contact}/delete', 'Contacts@destroy')->name('contacts.destroy');

// Route::resource('contacts', 'Contacts')->middleware('auth');
