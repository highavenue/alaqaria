<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    protected $fillable = ['image', 'event_id'];

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }

    public function getimageURLAttribute()
    {
    	return asset('uploads/img/event_img/'.$this->image);
    }
}
