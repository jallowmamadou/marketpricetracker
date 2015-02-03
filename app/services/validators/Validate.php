<?php namespace services\Validators;

abstract class Validate {
	protected $attributes;
    public $errors;
	public function passes(){
		$validation = \Validator::make($this->attributes, static::$rules);

		if ( $validation->passes() ) return true; //when its false below

		$messages = $validation->messages();
		$this->errors = $messages;
		// return $messages;
		// var_dump($this->errors);

		return false;

	}
}