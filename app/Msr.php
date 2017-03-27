<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msr extends Model
{
    protected $fillable = ['requestedby', 'category','location','center','requestedfor','contactno','desc'];

    public function msrConstant()
    {
    	return $this->belongsTo('App\Msrconstant');
    }
}
