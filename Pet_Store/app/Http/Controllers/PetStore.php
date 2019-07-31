<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetStore extends Controller
{
    //
    public function index(){
        return view ('Pets.index');
    }
}
