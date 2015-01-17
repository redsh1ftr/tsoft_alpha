<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('contact_id');
			$table->string('name');
			$table->string('phone');
			$table->string('fax');
			$table->string('website');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('bill_street1');
			$table->string('bill_street2');
			$table->string('bill_city');
			$table->string('bill_state');
			$table->string('bill_zip');
			$table->string('ship_attn');
			$table->string('ship_street1');
			$table->string('ship_street2');
			$table->string('ship_city');
			$table->string('ship_state');
			$table->string('ship_zip');
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
		Schema::drop('clients');
	}

}
