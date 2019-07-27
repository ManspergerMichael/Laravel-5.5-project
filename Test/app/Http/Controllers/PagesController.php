<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'Meet Big Booty Bitches',
            'Bang Big Booty Bitches',
            'Feel shame and cry'
        ];
        return view('welcome', [
            //This line creates a tasks variable and passes the $tasks array into it. 
            //The view will have access to the 'tasks' data
            'tasks' => $tasks,
            'foo' => 'foobar',
            //'alert' => '<script>alert("foobar")</script>'
    
            //SQL querys will go here
        ]);
    }
    public function about(){
        return view('about');
    }
    
    public function contact(){
        return view('contact');
    }
}
