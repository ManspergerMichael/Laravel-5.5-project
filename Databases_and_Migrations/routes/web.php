<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

GET (RETREVE)

POST (CREATE)

PUT not convention same as PATCH

PATCH (UPDATE)

DELETE (DESTROY)
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::patch('/tasks/{task}','ProjectTasksController@update');

//this creates RESTful routes in the format listed below
Route::resource('projects', 'ProjectsController');

/*
--Format of restful routing created with the resource helper


Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/




/*
route plan
GET /projects (index)
GET /projects/create (create)
GET /projects/1 (show)
POST /projects/store (store)
get /projects/1/edit (edit)
PATCH (UPDATE) /projects/1
DELETE (DESTROY) /projects/1
 */
