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

Auth::routes(['register' => false]);

Route::group(['prefix' => 'adminpanel', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return redirect()->route('leads.index');
    });

    Route::group(['prefix'=>'leads'], function() {
        Route::get('/', 'LeadController@index')->name('leads.index');
        Route::get('{lead}', 'LeadController@show')->name('leads.show');
        Route::delete('{lead}', 'LeadController@destroy')->name('leads.destroy');
    });
    
});

Route::view('/', 'layouts.quiz');


Route::post('/leads', 'LeadController@store')->name('leads.store');



