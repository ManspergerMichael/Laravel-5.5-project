<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function index()
    {
        $projects = \App\project::all();
        return view('projects.index', compact('projects'));
    }
}
