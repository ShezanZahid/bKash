<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedCatagory extends Model
{
     public function approvedprocesses()
    {
    	return $this->belongsToMany('App\ApprovedProcess')->withTimestamps();
    }
}
