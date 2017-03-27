<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msrconstant extends Model
{
    protected $fillable = ['documentno', 'revisionno','revisiondate'];

    public function msr()
    {
    	return $this->hasMany('App\Msr');
    }


     protected static function boot() {
        parent::boot();

        static::deleting(function($msrconstant) { // before delete() method call this
             $msrconstant->msr()->delete();
             // do the rest of the cleanup...
        });
    }
}
