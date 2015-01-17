<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_services', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('invoice_id');
			$table->string('service');
			$table->string('description');
			$table->integer('quantity');
			$table->string('price');
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
		Schema::drop('invoice_services');
	}

}
