<?php

class Usage extends \Eloquent {

	protected $table = 'usages';

	// Add your validation rules here
	public static $rules = [
		'type' => 'required|max:50',
		'gpm'  => 'required|numeric'
	];

	// Don't forget to fill this array
	protected $fillable = [
		'type',
		'gpm'
	];

	public $timestamps = false;

	public function instances()
	{
	    return $this->hasMany('Instance')->orderBy('created_at', 'desc');
	}

}