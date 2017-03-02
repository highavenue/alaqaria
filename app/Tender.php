<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    //
     public function getattachmentURLAttribute()
    {
    	return asset('storage/tender_docs/'.$this->attachment);
    }


    protected $fillable = ['english_only', 'tender_no', 'subject_en', 'subject_ar', 'desc_en', 'desc_ar', 'attachment','close_date'];

    public function tenderReceipt()
    {
    	return $this->hasMany('App\TenderReceipt');
    }


     protected static function boot() {
        parent::boot();

        static::deleting(function($tender) { // before delete() method call this
             $tender->tenderReceipt()->delete();
             // do the rest of the cleanup...
        });
    }


}
