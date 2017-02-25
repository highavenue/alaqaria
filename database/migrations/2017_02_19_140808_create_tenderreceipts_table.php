<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenderReceiptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tender_receipts', function(Blueprint $table) {
            $table->increments('id');
            $table->string ('company_name');
            $table->string('receipt_number');
            $table->string('receiver_name');
            $table->string('password');
            $table->integer('tender_id')->unsigned();
            $table->foreign('tender_id')->references('id')->on('tender')->onDelete('cascade');
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
		Schema::drop('tender_receipts');
	}

}
