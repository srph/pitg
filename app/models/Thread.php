<?php

class Thread extends Eloquent {

	/**
	 * Table used by the model
	 *
	 * @access 	protected
	 */
	protected $table = 'threads';

	/**
	 * Columns fillable by the model
	 *
	 * @access 	protected
	 */
	protected $fillable = array(
		'user_id',
		'title',
		'hits',
		'body'
	);
	
	/**
	 * Allow model to interact with timestamps
	 *
	 * @access 	public
	 */
	public $timestamps = true;

	/**
	 * Define a belongsTo relationship with the Tag model
	 *
	 * @return  mixed
	 */
	public function tags()
	{
		return $this->belongsToMany('Tag');
	}

	/**
	 * Define a belongsTo relationship with the User model
	 *
	 * @return 	mixed
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
	
	/**
	 * Define a belongsTo relationship with the Post model
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