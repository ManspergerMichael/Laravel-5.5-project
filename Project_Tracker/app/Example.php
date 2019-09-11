<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    //a variable to hold an instance of foo
    protected $foo;
    //
    //this will create an instance of example with an instance of foo as a property
    public function __construct(Foo $foo) {
        $this->$foo = $foo;
    }
}
