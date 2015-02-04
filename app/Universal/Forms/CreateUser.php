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
		'phone' => 'required|unique:users|max:200',
		'password'=> 'required|max:200',
		'first_name' => 'max:200',
		'last_name' => 'max:200',
		'user_type' => 'max:200',
		'phones' => 'max:200',
		'profilePic' => 'max:200',
		'location'=> 'max:250'
	];
}
