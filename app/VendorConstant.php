<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorConstant extends Model
{
	protected $fillable = ['documentno', 'revisionno','revisiondate'];

	public function vender()
	{
		return $this->hasMany('App\Vendorregistration');
	}


	protected static function boot() {
		parent::boot();

        static::deleting(function($vendorconstant) { // before delete() method call this
        	$vendorconstant->vender()->delete();
             // do the rest of the cleanup...
        });
    }
}
