<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendorregistration extends Model
{
    protected $fillable = ['registryno','registrydate','companyregisteredname','companyparentname','establishment','classification','bldname','bldno','floorno','streetname','streetno','zoneno','city','country','postalcode','boxno','telephoneno','email','faxno','docdetailstext','personname','personjobtitle','personemail','personmobileno','persontelephoneno','personfaxno','noofyears','client1','location1','duration1','client2','location2','duration2','client3','location3','duration3','poorexp','pleasespecify','previousbusinessname','reasonforchange','certifications','certificationbody1','validity1','certificationbody2','validity2','bankname','accountname','accountno','swiftcode','currency','ibanno','bankbranch','bankcity','bankpoboxno','banktelephoneno1','financecontactperson','banktelephoneno2','bankemailaddress','bankfaxno','natureoflocation','locationofoffice','commregno','qcmembership','taxcardno','embervalidity1','membervalidity2','otherdetails'];

    public function vendorConstant()
    {
    	return $this->belongsTo('App\VendorConstant');
    }
}
