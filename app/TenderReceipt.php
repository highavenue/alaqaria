<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderReceipt extends Model
{
    protected $fillable = ['company_name', 'receipt_number', 'receiver_name', 'password', 'tender_id'];

    public function tender()
    {
    	return $this->belongsTo('App\Tender');
    }

   
}
