<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filemanage extends Model
{
    public function journal()
    {
    	return $this->belongsTo('App\Journal');
    }
}
