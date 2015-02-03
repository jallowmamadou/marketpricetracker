<?php

class Person extends \Eloquent {
	protected $table = 'persons';
	protected $fillable = ['pers_fname','pers_mname','pers_lname','pers_type', 'pers_DOB', 'pers_gender','pers_nationality','pers_ethnicity','pers_NIN'];

public function contacts(){
	return $this->hasMany('Contact','Cont_EntityID');
}
public function addresses(){
	return $this->hasMany('Address','Addr_EntityID');
}

public function documents(){
	return $this->hasMany('Document','entity_ID');
}

}