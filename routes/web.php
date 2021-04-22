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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact')->middleware('auth');
Route::post('/contact', 'HomeController@contactpost')->middleware('auth');

Route::get('/quizname', 'Quiz@qname');
Route::post('/quizname', 'Quiz@qname_create');

Route::get('create/{id}', 'Quiz@create');
Route::post('create/{id}', 'Quiz@create_add');

Route::post('/delete_ques/{quiz_id}/{ques_id}', 'Quiz@delete_ques');
Route::post('/delete_quiz/{id}', 'Quiz@delete_quiz');

Route::get('/quizshow', 'Quiz@quiz_show');
Route::get('/quizshow/{id}', 'Quiz@premade');

Route::post('tryagain/{id}', 'Quiz@tryagain');

Route::get('/result/{id}', 'Quiz@leaderboard');
Route::get('/result/{id}/{score}/{total}', 'Quiz@result');

Route::get('/joinerr/{id}', 'Quiz@join_error');
Route::get('/joinerr/reattempt/{id}', 'Quiz@join_reattempt');



