<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //

    public function getimageURLAttribute()
    {
    	return asset('uploads/img/misc_img/'.$this->image);
    }
}
