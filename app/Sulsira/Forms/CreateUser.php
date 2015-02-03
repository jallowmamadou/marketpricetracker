<?php namespace Universal\Forms;

use Laracasts\Validation\FormValidator;

class CreateUser extends FormValidator{
		/**
		 * validation rules for the craet user creation form
		 * Post /plots/create
		 *
		 * @return Response 
		 */
	protected $rules = [
		'email' => 'required|email|unique:users|max:200',
		'password'=> 'required|max:200',
		'security_level' => 'required|numeric|max:200',
		'first_name' => 'max:200',
		'last_name' => 'max:200',
		'department' => 'max:200',
		'phone' => 'max:200',
		'profilePic' => 'max:200'
	];
}
