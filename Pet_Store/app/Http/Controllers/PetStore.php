<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pets;

class PetStore extends Controller
{
    //
    public function LogAndReg(){
        return view ('Pets.LogAndReg');
    }
    public function create(){
        return view ('Pets.create');
    }
    public function edit(){
        return view ('Pets.edit');
    }
    public function index(){
        $pets = pets::all();
        return view ('Pets.index', ['pets' => $pets]);
    }
}
