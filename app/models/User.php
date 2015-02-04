<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $primaryKey = 'id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array( 'remember_token');
	protected $fillable = [
	'phone','password', 'username','status'];


	public function setPasswordAttribute($password){
			
		$this->attributes['password'] = Hash::make($password);

	}
	public function role(){
		return $this->hasOne('UserRole','user_id');
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

	public static function creation($data){

		   $user = new static($data);
		   // raise an event
		   // $user->raise(new UserRegistered);
		   return $user;

	}

}
