<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('area_en');
            $table->string('area_ar');
            $table->string('street_en');
            $table->string('street_ar');
            $table->string('pobox');
            $table->string('state_en');
            $table->string('state_ar');
            $table->string('country_en');
            $table->string('country_ar');
            $table->string('ph1');
            $table->string('ph2');
            $table->string('fax');
            $table->string('email');
            $table->text('map');
            $table->string('facebook');
            $table->string('twitter');
            $table->text('linkedin');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('rss');
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
		Schema::drop('contacts');
	}

}
