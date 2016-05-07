<?php

class Usage extends \Eloquent {

	protected $table = 'usages';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function instances()
	{
	    return $this->hasMany('Instance')->orderBy('created_at', 'desc');
	}

}