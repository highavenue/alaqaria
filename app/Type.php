<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable=['name_en','name_ar'];
    public function property()
    {
    	return $this->hasMany('App\Property');
    }
}
