<?php

class InvoiceService extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = 
	[
	'invoice_id',
	'service',
	'description',
	'quantity',
	'price',
	];

	protected $table = 'invoice_services';

}
