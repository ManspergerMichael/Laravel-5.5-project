<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /*
    This sets security to allow only these feilds to pass through
    protected $fillable = [
        'title',
        'description'
    ]; */

    /*
    This sets security to allow everything except fields in array
    leaveing the array empty essencaly shuts off security

     */
    protected $guarded = [];

    //Eloquent relationship, one to many
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    //add task to project
    public function addTask($description)
    {
        $this->tasks()->create(compact('description'));

        /* return Task::create([
            'project_id' =>$this->id,
            'description' => $description
        ]); */
    }
}
//$project->Tasks
