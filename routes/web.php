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

/*Route::get('dossiers','DossierController@index');
Route::get('dossiers/create','DossierController@create');
Route::post('dossiers','DossierController@store');
Route::get('dossiers/{id}/edit','DossierController@edit');
Route::put('dossiers/{id}','DossierController@update');
Route::delete('dossiers/{id}','DossierController@destroy');*/


Route::post('/addfichier','AdossierController@addFichier');

Route::resource('users','UserController');

Route::get('/getdata/{id}','AdossierController@getData');

Route::get('rendez-vous','AdossierController@indexRdv');

Route::post('/addrdv','AdossierController@addRdv');
Route::delete('/deleterdv/{id}', 'AdossierController@deleteRdv');

Route::post('/addcommentaire','AdossierController@addCommentaire');
Route::delete('/deletecommentaire/{id}', 'AdossierController@deleteCommentaire');

Route::post('/uploadfichiers','AdossierController@uploadFichiers');

Route::resource('adossiers','AdossierController');

Route::resource('dossiers','dossierController');

Auth::routes();

use Illuminate\Http\Request;

Route::get('home', 'HomeController@index');