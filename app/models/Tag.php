<?php

class Tag extends \Eloquent {

	protected $table = 'tags';
	// Add your validation rules here
	public static $rules = [
		'tag' => 'max:100'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'tag'
	];

	public $timestamps = false;

	public function diys()
	{
	    return $this->belongsToMany('Diy');
	}

}