<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTendersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tenders', function(Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('english_only')->default(0);
            $table->string('tender_no');
            $table->string('subject_en');
            $table->string('subject_ar');
            $table->text('desc_en');
            $table->text('desc_ar');
            $table->string('attachment');
            $table->date('close_date');
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
		Schema::drop('tenders');
	}

}
