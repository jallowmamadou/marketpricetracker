<?php

class Variable extends Eloquent {
	protected $guarded = array();
	public static $rules = array();
	protected $fillable = ['Vari_ID','Vari_VariableName','Vari_Table','Vari_Field','Vari_AddDate','Vari_UpdateDate'];


	public static function domain($area){
		return self::where('Vari_Field','=',$area)->get();
	}
}
