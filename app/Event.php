<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description'];

    public function eventImage()
    {
    	return $this->hasMany('App\EventImage');
    }


     protected static function boot() {
        parent::boot();

        static::deleting(function($event) { // before delete() method call this
             $event->eventimage()->delete();
             // do the rest of the cleanup...
        });
    }

}
