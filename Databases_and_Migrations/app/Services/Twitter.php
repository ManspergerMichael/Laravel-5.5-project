<?php

namespace App\Services;

class Twitter
{
    protected $api_key;

    public function _construct($api_key)
    {
        $this->$api_key = $api_key;
    }

}

