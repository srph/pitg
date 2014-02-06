<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

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
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Define a hasMany relationship with the Thread model
	 *
	 * @return 	mixed
	 */
	public function threads()
	{
		return $this->hasMany('Thread');
	}

	/**
	 * Define a hasMany relationship with the Post model
	 *
	 * @return 	mixed
	 */
	public function posts()
	{
		return $this->hasMany('Post');
	}

	/**
	 * Define a hasMany relationship with the Hit model
	 *
	 * @return 	mixed
	 */
	public function hits()
	{
		return $this->hasMany('Hit');
	}

}