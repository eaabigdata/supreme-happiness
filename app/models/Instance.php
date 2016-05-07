<?php

class Instance extends \Eloquent {

    protected $table = 'instances';

	// Add your validation rules here
	public static $rules = [
        'duration_in_ms' => 'required|numeric',
        'total_gpm'      => 'required|numeric',
        'profile_id'     => 'required|numeric',
        'usage_id'       => 'requried|numeric'
	];

	// Don't forget to fill this array
	protected $fillable = [
        'duration_in_ms',
        'total_gpm',
        'profile_id',
        'usage_id'
    ];

    public function usage()
    {
        return $this->belongsTo('Usage');
    }

    public function profile()
    {
        return $this->belongsTo('Profile');
    }

}