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
    return view('welcome');
});



Route::group(['middleware' => ['web','auth']],function (){
    Route::get('survey/signin',['uses' => 'SurveyController@signin']);
    Route::get('survey/signup',['uses' => 'SurveyController@signup']);
    Route::get('survey/myland2',['uses' => 'SurveyController@myland2']);
    Route::get('survey/myland1',['uses' => 'SurveyController@myland1']);
    Route::any('survey/survey',['uses' => 'SurveyController@survey']);
    Route::get('survey/presurvey',['uses' => 'SurveyController@presurvey']);
    Route::any('survey/save',['uses' => 'SurveyController@save']);
    Route::any('survey/update/{id}',['uses' => 'SurveyController@update']);
    Route::any('survey/statistics',['uses' => 'SurveyController@statistics']);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


