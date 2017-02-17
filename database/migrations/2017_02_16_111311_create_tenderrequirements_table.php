<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenderRequirementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tender_requirements', function(Blueprint $table) {
            $table->increments('id');
            $table->string('subject_en');
            $table->string('subject_ar');
            $table->text('desc_en');
            $table->text('desc_ar');
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
		Schema::drop('tender_requirements');
	}

}
