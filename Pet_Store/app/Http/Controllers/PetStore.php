<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pets;

class PetStore extends Controller
{
    //
    
    public function create(){
        return view ('Pets.create');
    }
    public function edit($id){
        return view ('Pets.edit');
    }
    public function show($id){
        return view ('Pets.show');
    }
    public function update($id){
        return redirect('Pets.index');
    }
    public function destroy($id){
        return redirect ('Pets.index');
    }
    public function index(){
        $pets = pets::all();
        return view ('Pets.index', ['pets' => $pets]);
    }
}

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy');