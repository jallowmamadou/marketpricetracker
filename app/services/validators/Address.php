<?php namespace services\validators;

class Address extends Validate{
		public static $rules = [
		'Addr_Town'=> 'max:200',
		'Addr_District'=> 'max:200',
		'Addr_AddressStreet'=> 'max:200'
	];
	public function __construct($attributes = null){
		$this->attributes = $attributes ?: \Input::all();
	}
}