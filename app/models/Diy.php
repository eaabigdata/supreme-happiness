<?php

class Diy extends \Eloquent {

    protected $table = 'diys';

	// Add your validation rules here
	public static $rules = [
        'title'   => 'required|min:10|max:150',
        'content' => 'required|min:50|max:1500',
        'user_id' => 'required|numeric'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

	public function profile()
    {
        return $this->belongsTo('Profile');
    }

    public function tags()
	{
	    return $this->belongsToMany('Tag');
	}

	public function ratings()
	{
	    return $this->belongsToMany('Rating');
	}

}