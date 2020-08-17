<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/client/add', 'ClientController@add')->name('addclient');
Route::get('/client/edit/{id}', 'ClientController@edit')->name('editclient');
Route::post('/client/update', 'ClientController@update')->name('updateclient');
Route::get('/client/delete{id}', 'ClientController@delete')->name('deleteclient');
Route::get('/client/getAll', 'ClientController@getAll')->name('getallclient');
Route::post('/client/persist', 'ClientController@persist')->name('persistclient');


Route::get('/entreprise/add', 'EntrepriseController@add')->name('addentreprise');
Route::get('/entreprise/edit/{id}', 'EntrepriseController@edit')->name('editentreprise');
Route::post('/entreprise/update', 'EntrepriseController@update')->name('updateentreprise');
Route::get('/entreprise/delete{id}', 'EntrepriseController@delete')->name('deleteentreprise');
Route::get('/entreprise/getAll', 'EntrepriseController@getAll')->name('getallentreprise');

Route::get('/compteclient/add', 'CompteClientController@add')->name('addcompteclient');
Route::get('/compteclient/edit/{id}', 'CompteClientController@edit')->name('editcompteclient');
Route::post('/compteclient/update', 'CompteClientController@update')->name('updatecompteclient');
Route::get('/compteclient/delete{id}', 'CompteClientController@delete')->name('deletecompteclient');
Route::get('/compteclient/getAll', 'CompteClientController@getAll')->name('getallcompteclient');

Route::get('/compteentreprise/add', 'CompteEntrepriseController@add')->name('addcompteentreprise');
Route::get('/compteentreprise/edit/{id}', 'CompteEntrepriseController@edit')->name('editcompteentreprise');
Route::post('/compteentreprise/update', 'CompteEntrepriseController@update')->name('updatecompteentreprise');
Route::get('/compteentreprise/delete{id}', 'CompteEntrepriseController@delete')->name('deletecompteentreprise');
Route::get('/compteentreprise/getAll', 'CompteEntrepriseController@getAll')->name('getallcompteentreprise');
