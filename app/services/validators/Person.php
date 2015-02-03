<?php namespace services\validators;

class Person extends Validate{

	
		public static $rules = [
		'fname'=> 'required|max:200',
		'mname'=> 'max:200',
		'lname'=> 'required|max:200',
		'dob'=> 'date',
		'Pers_Ethnicity'=> 'max:200',
		'Pers_Nationality'=> 'max:200',
		'Pers_Gender'=> 'max:200',
		'photo'=>'mimes:jpg,png,jpeg|max:3024', #this should more in the future
		'document'=>'mimes:pdf:6024' #this should more in the future
	];
	public function __construct($attributes = null){
		$this->attributes = $attributes ?: \Input::all();
	}
}