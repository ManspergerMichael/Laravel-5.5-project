<?php

namespace App\Repositories;

interface UserRepository {
    //an interface is the contract, a class must implement the following function names
    public function create($attributes);
}
