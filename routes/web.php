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

//Route::get('/q', function () {
//    return view('question');
//});

Route::get('/q', 'QuestionController@index');
Route::get('/a', 'QuestionController@answer');
Route::get('/start', 'QuestionController@start');
Route::get('/questions', 'QuestionController@showAll');
Route::get('/add', 'QuestionController@create');
Route::post('/add', 'QuestionController@store');
Route::get('/show/{id}', 'QuestionController@showQuestion');
