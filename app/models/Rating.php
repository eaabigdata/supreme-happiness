<?php

class Rating extends \Eloquent {

	protected $table = 'ratings';
	// Add your validation rules here
	public static $rules = [
		'rating' => 'numeric'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'rating'
	];

	public $timestamps = false;

	public function diys()
	{
	    return $this->belongsToMany('Diy');
	}

}