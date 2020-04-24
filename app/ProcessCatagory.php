<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessCatagory extends Model
{
    public function approvedprocesses()
    {
    	return $this->hasMany('App\ApprovedProcess');
    }
}
