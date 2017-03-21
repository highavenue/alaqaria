<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatemsrsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('msrs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('msr_refno');
            $table->string('requestedby');
            $table->string('perlocation');
            $table->string('contact');
            $table->string('reqstdfor');
            $table->date('reqstdate');
            $table->time('reqsttime');
            $table->string('requestreceievedby');
            $table->string('location');
            $table->string('requestcategory');
            $table->text('desc_of_reqst');
            $table->string('msrcategory');
            $table->integer('amount');
            $table->string('msrapprovals');
            $table->string('preferredaccess');
            $table->string('incidentreport');
            $table->string('approvals');
            $table->string('acprejectby');
            $table->string('priority');
            $table->text('reason_for_rejection');
            $table->string('task');
            $table->text('remarks');
            $table->text('comments');
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
		Schema::drop('msrs');
	}

}
