<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovedProcess extends Model
{
    public function process_catagory()
    {
    	return $this->belongsTo('App\ProcessCatagory');
    }
     public function assignedcatagories()
    {
    	return $this->belongsToMany('App\AssignedCatagory')->withTimestamps();;
    }
}
