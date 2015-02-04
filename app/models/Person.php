<?php

class Person extends \Eloquent {
	protected $table = 'persons';
	protected $fillable = ['fname','mname','lname','type', 'DOB', 'gender','nationality','ethnicity','NIN'];

public function contacts(){
	return $this->hasMany('Contact','Cont_EntityID');
}
public function addresses(){
	return $this->hasMany('Address','Addr_EntityID');
}

public function documents(){
	return $this->hasMany('Document','entity_ID');
}
public static function creation($data){
	   $person = new static($data);
	   return $person;
}	
}