<?php

class Contact extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [
	'name',
	'fname',
	'lname',
	'phone',
	'email',
	'facebook',
	'linkedin',
	'twitter',
	'skype',
	'street1',
	'street2',
	'city',
	'state',
	'zip',
	];

	protected $table = 'contacts';
}