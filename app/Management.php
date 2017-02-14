<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    //

    public function getimageURLAttribute()
    {
    	return asset('uploads/img/management_img/'.$this->image);
    }
}
