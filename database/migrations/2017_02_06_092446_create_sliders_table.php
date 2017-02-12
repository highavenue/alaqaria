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
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('subject_en');
            $table->string('subject_ar');
            $table->string('linktext_en');
            $table->string('linktext_ar');
            $table->text('link');
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
