<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sop extends Model
{
    public function assignedcatagories()
    {
    	return $this->belongsToMany('App\AssignedCatagory')->withTimestamps();;
    }

    
}
