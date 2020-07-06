<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        return view('Home', [
            'foo' => 'bar'
        ]);
    }

    public function Contact()
    {
        return view('contact');
    }
}
