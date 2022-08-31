<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    private $result;

    public function __construct($result)
    {
        $this->result = $result;
    }

    public function getResult() 
    {
        return $this->result; 
    }
}
