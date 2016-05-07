<?php

class Report extends \Eloquent {
    protected $table = "reports";

    public static $rules = [
        'description' => 'required|min:50|max:1000',
        'location_id' => 'required|numeric',
        'profile_id'  => 'required|numeric'
    ];

	protected $fillable = [
        'description',
        'image_url',
        'location_id',
        'profile_id'
    ];

    public function profile()
    {
        return $this->belongsTo('Profile');
    }

    public function location()
    {
        return $this->hasOne('Location');
    }
}