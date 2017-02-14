<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('managements', function(Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('desig_en');
            $table->string('desig_ar');
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
		Schema::drop('managements');
	}

}
