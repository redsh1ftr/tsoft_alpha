<?php

class Client extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'contact_id',
	'name',
	'phone',
	'fax',
	'website',
	'facebook',
	'twitter',
	'bill_street1',
	'bill_street2',
	'bill_city',
	'bill_state',
	'bill_zip',
	'ship_attn',
	'ship_street1',
	'ship_street2',
	'ship_city',
	'ship_state',
	'ship_zip',

	];

	protected $tables = 'clients';

	public function getName($client_id){

		$name = Client::where('id', $this->client_id)->pluck('name');

		return($name);
	}

}