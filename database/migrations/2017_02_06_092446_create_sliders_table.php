<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sliders', function(Blueprint $table) {
            $table->increments('id');
            $table->string('image')->required();
            $table->string('title_en')->required();
            $table->string('title_ar')->required();
            $table->string('subject_en')->required();
            $table->string('subject_ar')->required();
            $table->string('linktext_en')->required();
            $table->string('linktext_ar')->required();
            $table->text('link')->required();
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
		Schema::drop('sliders');
	}

}
