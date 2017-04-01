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
            $table->integer('vendorconstant_id')->unsigned();
            $table->foreign('vendorconstant_id')->references('id')->on('vendorconstant')->onDelete('cascade');
            $table->string('registryno')->nullable();
            $table->date('registrydate')->nullable();
            $table->string('companyregisteredname');
            $table->string('companyparentname');
            $table->string('establishment');
            $table->string('classification');
            $table->string('buildingname')->nullable();
            $table->string('buildingno')->nullable();
            $table->string('floorno')->nullable();
            $table->string('streetname')->nullable();
            $table->string('streetno')->nullable();
            $table->string('zoneno')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('boxno');
            $table->string('telephoneno');
            $table->string('email');
            $table->string('faxno');

            // $table->string('natureofbusiness');
            // $table->string('natureofbusinessother')->nullable();

            $table->string('naturetrader')->nullable();
            $table->string('naturemanufacturer')->nullable();
            $table->string('naturecontractor')->nullable();
            $table->string('naturedistributor')->nullable();
            $table->string('natureconsultant')->nullable();
            $table->string('natureserviceprovider')->nullable();
            $table->string('natureothers')->nullable();


            $table->string('fieldproduct')->nullable();
            $table->text('fieldproducttext')->nullable();
            $table->string('fieldservice')->nullable();
            $table->text('fieldservicetext')->nullable();
            $table->string('fieldwork')->nullable();
            $table->text('fieldworktext')->nullable();

            $table->string('personname');
            $table->string('personjobtitle');
            $table->string('personemail');
            $table->string('personmobileno');
            $table->string('persontelephoneno')->nullable();
            $table->string('personfaxno')->nullable();
            // $table->string('crdoc');
            // $table->string('tradelicencedoc');
            // $table->string('companysignaturedoc');
            // $table->string('otherdocument');
            $table->text('docdetailstext');
            $table->string('noofyears')->nullable();
            $table->string('client1')->nullable();
            $table->string('location1')->nullable();
            $table->string('duration1')->nullable();
            $table->string('client2')->nullable();
            $table->string('location2')->nullable();
            $table->string('duration2')->nullable();
            $table->string('client3')->nullable();
            $table->string('location3')->nullable();
            $table->string('duration3')->nullable();
            $table->string('poorexp');
            $table->string('pleasespecify')->nullable();
            $table->string('previousbusinessname')->nullable();
            $table->string('reasonforchange')->nullable();
            $table->string('certifications')->nullable();
            $table->string('certificationbody1')->nullable();
            $table->string('validity1')->nullable();
            $table->string('certificationbody2')->nullable();
            $table->string('validity2')->nullable();
            $table->string('bankname');
            $table->string('accountname');
            $table->string('accountno');
            $table->string('swiftcode')->nullable();
            $table->string('currency');
            $table->string('ibanno')->nullable();
            $table->string('bankbranch')->nullable();
            $table->string('bankcity')->nullable();
            $table->string('bankpoboxno')->nullable();
            $table->string('banktelephoneno1')->nullable();
            $table->string('financecontactperson')->nullable();
            $table->string('banktelephoneno2')->nullable();
            $table->string('bankemailaddress')->nullable();
            $table->string('bankfaxno')->nullable();
            $table->string('natureoflocation');
            $table->string('locationofoffice');
            $table->string('commregno');
            $table->string('qcmembership');
            $table->string('taxcardno');
            $table->date('membervalidity1');
            $table->date('membervalidity2');
            $table->string('otherdetails')->nullable();
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
