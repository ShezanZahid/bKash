<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
     public function filemanages()
    {
    	return $this->hasMany('App\filemanages');
    }
}
