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

    public function store(){

        Project::create(
            request()->validate([
            'title' => ['required','min:3'],
            'description' => ['required','min:7']
            ])
        );

        return redirect('/projects');
    }

    public function show(Project $project) //route model binding
    {
        //project = Project::findOrFail($id);
        return view('Projects.show', compact('project'));
    }
    public function edit(Project $project)
    {
        //$project = Project::findOrFail($id); no longer needed with route model binding
        return view('projects.edit', compact('project'));
    }
    public function update(Project $project)
    {
        //$project = Project::findOrFail($id);
        $project->update(request(['title','description']));

        /* $project->title = request('title');
        $project->description = request('description');
        $project->save(); */
        return redirect('/projects');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
