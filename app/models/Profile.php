<?php

class Profile extends \Eloquent {

    protected $table = 'profiles';

    public static $rules = [
        'about_me'  => 'required|min:5|max:500',
        'is_public' => 'required|boolean',
        'user_id'   => 'required|numeric'
    ];
	
    protected $fillable = [
        'about_me',
        'is_public',
        'image_url',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo("User");
    }

    public function instances()
    {
        return $this->hasMany('Instance');
    }

    public function reports()
    {
        return $this->hasMany('Report');
    }
}