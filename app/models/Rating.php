<?php

class Rating extends \Eloquent {

	protected $table = 'ratings';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function diys()
	{
	    return $this->belongsToMany('Diy');
	}

}