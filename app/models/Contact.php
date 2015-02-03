<?php

class Contact extends \Eloquent {
	protected $fillable = [
	'Cont_EntityID',
	'Cont_EntityType',
	'Cont_Contact',
	'Cont_ContactType',
	'id'
];
public function person(){
	return $this->belongsTo('Person','Cont_EntityID','id');
}
}