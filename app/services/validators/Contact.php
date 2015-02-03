<?php namespace services\validators;

class Contact extends Validate{
		public static $rules = [
		'phones'=> 'max:200',
		'email'=> 'max:220',
		'telephone'=> 'max:200'
	];
	public function __construct($attributes = null){
		$this->attributes = $attributes ?: \Input::all();
	}
}