<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatevendorregistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendorregistrations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('registryno');
            $table->date('registrydate');
            $table->string('companyregisteredname');
            $table->string('companyparentname');
            $table->string('establishment');
            $table->string('classification');
            $table->string('bldname');
            $table->string('bldno');
            $table->string('floorno');
            $table->string('streetname');
            $table->string('streetno');
            $table->string('zoneno');
            $table->string('city');
            $table->string('country');
            $table->string('postalcode');
            $table->string('boxno');
            $table->string('telephoneno');
            $table->string('email');
            $table->string('faxno');
            $table->string('natureofbusiness');
            $table->string('fieldoftrade');
            $table->string('fieldoftradetext');
            $table->string('personname');
            $table->string('personjobtitle');
            $table->string('personemail');
            $table->string('personmobileno');
            $table->string('persontelephoneno');
            $table->string('personfaxno');
            $table->text('submitteddocuments');
            $table->string('noofyears');
            $table->string('client1');
            $table->string('location1');
            $table->string('duration1');
            $table->string('client2');
            $table->string('location2');
            $table->string('duration2');
            $table->string('client3');
            $table->string('location3');
            $table->string('duration3');
            $table->tinyInteger('poorexp')->default(0);
            $table->string('pleasespecify');
            $table->string('previousbusinessname');
            $table->string('reasonforchange');
            $table->string('certifications');
            $table->string('certificationbody1');
            $table->string('validity1');
            $table->string('certificationbody2');
            $table->string('validity2');
            $table->string('bankname');
            $table->string('accountname');
            $table->string('accountno');
            $table->string('swiftcode');
            $table->string('currency');
            $table->string('ibanno');
            $table->string('bankbldgname');
            $table->string('bankbldgno');
            $table->string('bankfloorno');
            $table->string('bankstreetname');
            $table->string('bankstreetno');
            $table->string('bankzoneno');
            $table->string('bankcity');
            $table->string('bankcountry');
            $table->string('bankpostalcode');
            $table->string('bankpoboxno');
            $table->string('banktelephoneno1');
            $table->string('financecontactperson');
            $table->string('banktelephoneno2');
            $table->string('bankemailaddress');
            $table->string('bankfaxno');
            $table->string('natureoflocation');
            $table->string('locationofoffice');
            $table->string('commregno');
            $table->string('qcmembership');
            $table->string('taxcardno');
            $table->string('membervalidity1');
            $table->string('membervalidity2');
            $table->string('otherdetails');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vendorregistrations');
	}

}
