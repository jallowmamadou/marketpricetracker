<?php

class UserRole extends \Eloquent {
	protected $table = "UserRoles";
	protected $primaryKey = "id";
	protected $fillable = ['url','userType','seller_id','user_id'];

	public function user(){
		return $this->belongsTo('User','user_id','id');
	}

	public static function creation($data){
	   $user = new static($data);
	   return $user;
	}	
}