<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public function project()
    {
        # code...
        return $this->belongsTo(Project::class);
    }
}
