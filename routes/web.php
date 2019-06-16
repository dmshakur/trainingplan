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

Route::view('/', 'base.home')->name('home');
Route::view('/overview', 'overview')->name('overview.get');
Route::view('/newplan', 'newplan')->name('newplan.get');

Route::get('/overview/{trainingplan_id}', 'OverviewsController@trainingPlan')->name('overview.trainingplan');

Route::post('/newplan', 'TrainingPlansController@store')->name('newplan.store');

Auth::routes();
