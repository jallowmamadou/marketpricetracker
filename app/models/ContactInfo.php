<?php

class ContactInfo extends \Eloquent {
	protected $table = 'contactinfo';
	protected $primaryKey = 'id';
	protected $fillable = [
	'entity_id',
	'entity_type',
	'telephone',
	'address',
	'email',
	'id'
];
	public function person(){
		return $this->belongsTo('Person','entity_id','id');
	}
	public static function creation($data){

		   $contact = new static($data);
		   // raise an event
		   return $contact;

	}
}