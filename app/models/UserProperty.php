<?php

class UserProperty extends \Eloquent {
	protected $table = 'userProperties';
	protected $primaryKey = 'id';
	protected $fillable = ['user_id','role_id','contact_id','person_id','address_id','UserProperties','image','thumbnail','url'];

	public static function creation($data){
	   $user = new static($data);
	   return $user;
	}	
}