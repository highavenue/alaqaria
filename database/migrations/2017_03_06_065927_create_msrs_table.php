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
            $table->string('msr_refno')->nullable();
            $table->string('requestedby');
            $table->string('category');
            $table->string('location');
            $table->string('center');
            $table->string('requestedfor');
            $table->string('contactno');
            $table->string('desc');
            $table->string('requeststatus')->nullable();
            $table->text('comments')->nullable();
            $table->string('workstatus')->nullable();
            $table->integer('msrconstant_id')->unsigned();
            $table->foreign('msrconstant_id')->references('id')->on('msrconstant')->onDelete('cascade');
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
