<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    /*
        A note on encapsulation
        encapsulation is containing the model logic in the model
        the controller should not contain code for how the data and model interact
        the controller should only call functions and pass data to the model
     */

    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required|max:255']);
        $project->addTask($attributes['description']);

        /*
        Funcion as shown in lessons dosent work
        $project->addTask(
            request()->validate(['description' => 'required'])
        );
        */
        return back();
    }

    public function update(Task $task)
    {
        /*
        if(request()->has('completed'))
        {
            $task->complete();
        }
        else
        {
            $task->incomplete();
        }
        */

        request()->has('completed') ? $task->complete() : $task->incomplete();

        return back();
         // dd($task);
    }
}


