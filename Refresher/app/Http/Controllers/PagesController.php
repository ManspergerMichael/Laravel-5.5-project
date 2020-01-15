<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // php artisan controler
    public function home ()
    {
        $tasks = [
            'Eat',
            'Breath',
            'Code',
            'Jazz Hands!'
        ];
        return view('welcome',[
            'tasks' => $tasks,
            'title' => 'Fubar Coding'
        ]);
    }

    public function contact ()
    {
        return view('contact');
    }

   public function about()
   {
        return view('about');
   }
}
