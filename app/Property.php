<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
	protected $fillable=['location_id','category_id','type_id','desc_en','desc_ar','for_en','for_ar','status'];
	
	public function location()
	{
		return $this->belongsTo('App\Location');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function type()
	{
		return $this->belongsTo('App\Type');
	}

	public function propertyImage()
    {
    	return $this->hasMany('App\PropertyImage');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($property) { // before delete() method call this
             $property->propertyImage()->delete();
             // do the rest of the cleanup...
        });
    }

}
