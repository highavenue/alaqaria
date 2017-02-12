<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //

    public function getimageURLAttribute()
    {
    	return asset('uploads/img/slider_img/'.$this->image);
    }

    // public function getimagePathAttribute()
    // {
    // 	return asset('uploads/img/slider_img/');
    // }

}
