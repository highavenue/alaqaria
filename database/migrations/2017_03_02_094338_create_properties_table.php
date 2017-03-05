<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->text('desc_en');
            $table->text('desc_ar');
            $table->string('for');
            $table->integer('status');
            $table->foreign('location_id')->references('id')->on('location');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('type_id')->references('id')->on('type');
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
		Schema::drop('properties');
	}

}
