<?php

class UserRole extends \Eloquent {
	protected $table = "UserRoles";
	protected $primaryKey = "id";
	protected $fillable = [
							'user_id',
							'sign_id',
							'previledges',
							'security_level',
							'domain',
							'usergroup',
							'department_id',
							'url',
							'fullname',
							'phone',
							'department',
                            'thumbnail',
                            'image',
                            'filename'
						];

	public function user(){
		return $this->belongsTo('User','user_id','id');
	}

	public static function creation($data){
	   $user = new static($data);
	   return $user;
	}	
}