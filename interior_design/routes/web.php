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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index','IndexPageController@showIndexpage');
Route::get('/idea','IdeaPageController@showIdeapage');
Route::get('/general','GeneralPageController@showGeneralpage');
Route::get('/back','BackPageController@showBackpage');
Route::get('/cabinet','CabinetPageController@showCabinetpage');
Route::get('/color','ColorPageController@showColorpage');
Route::get('/center','CenterPageController@showCenterpage');
Route::get('/project','ProjectPageController@showProjectpage');
Route::get('/map','MapPageController@showMappage');
Route::get('/contact','ContactPageController@showContactpage');
Route::get('/direction','DirectionPageController@showDirectionpage');
Route::get('/news','NewsPageController@showNewspage');
Route::get('/index2','Index2PageController@showIndex2page');
Route::get('/wash','WashPageController@showWashpage');
Route::get('/dining','DiningPageController@showDiningpage');
Route::get('/balcony','BalconyPageController@showBalconypage');
