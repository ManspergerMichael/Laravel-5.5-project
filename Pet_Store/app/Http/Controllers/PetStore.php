<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pets;

class PetStore extends Controller
{
    //
    
    public function create(){
        return view('Pets.create');
    }
    public function edit($id){
        $pet = pets::findOrFail($id);
        return view('Pets.edit', compact('pet'));
    }
    public function show($id){
        $pet = pets::findOrFail($id);
        return view('Pets.show', compact('pet'));
    }
    public function store(){
        $pet = new pets();
        $pet->Pet_Name = request('Pet_Name');
        $pet->Type = request('type');
        $pet->Age = request('age');
        $pet->Price = request('price');
        $pet->save();
        return redirect('/Pets');
    }
    public function update($id){
        $pet = pets::findOrFail($id);
        $pet->Pet_Name = request('Pet_Name');
        $pet->Type = request('type');
        $pet->Age = request('age');
        $pet->Price = request('price');
        $pet->save();
        return redirect('Pets.index');
    }
    public function destroy($id){
        return redirect ('Pets.index');
    }
    public function index(){
        $pets = pets::all();
        return view ('Pets.index', compact('pets'));
    }
}

