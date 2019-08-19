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


/* Route::get('/', "PetStore@LogAndReg");
Route::get('/index', "PetStore@index");
Route::get('/edit', "PetStore@edit");
Route::get('/create',"PetStore@create"); */
Route::resource('Pets', 'PetStore');

/*
--Format of restful routing created with the resource helper


Route::get('/Pets', 'PetStore@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/

