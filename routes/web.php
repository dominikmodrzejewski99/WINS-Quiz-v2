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


Route::get('/start', 'QuestionController@start');
Route::get('/questions', 'QuestionController@showAll');
Route::get('/add', 'QuestionController@create');
Route::post('/add', 'QuestionController@store');
Route::get('/show/{id}/{wrong_answer}/{score}', 'QuestionController@showQuestion')->name('show');
Route::post('/show/{id}/{wrong_answer}/{score}', 'QuestionController@checkAnswer');
