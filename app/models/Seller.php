<?php

class Seller extends \Eloquent {
	protected $table = 'sellers';
	protected $primaryKey = 'id';
	protected $fillable = ['name','sellerType','location'];


	public static function creation($data){
	   $seller = new static($data);
	   return $seller;
	}	
}