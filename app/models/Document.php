<?php

class Document extends \Eloquent {
	protected $primaryKey = 'id';
	protected $fillable = ['title',
'entity_type',
'entity_ID',
'type',
'fullpath',
'filename',
'foldername',
'extension',
'filetype',
'thumnaildir',
'userID',
'deleted'];


}