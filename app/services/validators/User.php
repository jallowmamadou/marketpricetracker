<?php namespace services\validators;

class User extends Validate{

	
		public static $rules = [
		'username'=> 'required|max:200',
		'email'=> 'required|unique:users',
		'password'=> 'required|max:200',
		'mobile'=> 'max:200',
		'accountType'=> 'max:200',
		'Previleges'=> 'max:200'
	];
	protected $fillable = [
		'email',
		'password',
		'deleted'
	];
	public function __construct($attributes = null){
		$this->attributes = $attributes ?: \Input::all();
	}
}