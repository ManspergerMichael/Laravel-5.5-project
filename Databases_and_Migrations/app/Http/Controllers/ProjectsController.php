<?php

namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function index(){
        //one way to query
        //$projects = \App\Project::all();
        $projects = Project::all();

        //this returns the query results as json objects
        //return $projects;
        return view('projects.index',['projects' => $projects]);
    }

    public function create(){
        return view('projects.create');
    }
}
