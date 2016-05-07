<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Bbatsche\Entrust\Contracts\EntrustUserInterface;
use Bbatsche\Entrust\Traits\EntrustUserTrait;

class User extends Eloquent implements ConfideUserInterface, EntrustUserInterface

	use ConfideUser, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $rules = array(
		'email' 	 	   => 'required|email|max:255|unique:users',
		'username'		   => 'required|max:255|unique:users',
		'first_name' 	   => 'max:255',
		'last_name'  	   => 'max:255',
		'password'		   => 'required'
	);

	protected $fillable = array(
		'email',
		'username',
		'first_name',
		'last_name',
		'password'
	);

	protected $hashable = [ 'password' ];

	public function profile()
	{
		return $this->hasOne('Profile');
	}
}
