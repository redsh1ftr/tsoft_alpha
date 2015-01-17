<?php

class Invoice extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = 
	[
	'client_id',
	'po_number',
	'invoice_number',


	];

	protected $table = 'invoices';



	public function clientInfo($id){

		$client = Client::where('id', $id)->get();

		return($client);
	}

	public function clientName($id){

		$name = Client::where('id', $id)->pluck('name');

		return($name);
	}

	public function getServices($id){

		$services = InvoiceService::where('invoice_id', $this->id)->get();

		return($services);
	}

	public function invoiceTotal($id){

		$sumtotal = InvoiceService::where('invoice_id', $this->id)->select('price', 'quantity')->get();

		$newsum = 0;
		foreach($sumtotal as $sum){
			$newsum = $sum->price * $sum->quantity + $newsum;}




		return($newsum);
	}



}