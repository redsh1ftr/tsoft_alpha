<?php

class Item extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'name',
	'link', 
	'description',
	'notes',
	'base_price',

	];

	protected $table = 'items';
}