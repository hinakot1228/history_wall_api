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
    return view('pages.home');
});

Route::get('/question/create', 'App\Http\Controllers\QuestionController@create')->name('questions.create');

Route::post('/questions', 'App\Http\Controllers\QuestionController@store')->name('questions.store');

Route::get('/questions', 'App\Http\Controllers\QuestionController@index')->name('questions.index');

Route::get('/questions/{id}', 'App\Http\Controllers\QuestionController@show')->name('questions.show');

Route::get('/question/{id}/edit', 'App\Http\Controllers\QuestionController@edit')->name('questions.edit');

Route::put('/question/{id}', 'App\Http\Controllers\QuestionController@update')->name('questions.update');






// Route::get('/contact', function () {
//     return view('pages.contact');
// });
 