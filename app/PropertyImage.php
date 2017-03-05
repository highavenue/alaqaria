<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    public function property()
	{
		return $this->belongsTo('App\Property');
	}

	public function getimageURLAttribute()
    {
    	return asset('uploads/img/property_img/'.$this->image);
    }
}
