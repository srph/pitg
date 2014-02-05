<?php

class Post extends Eloquent {

	/**
	 * Table used by the model
	 *
	 * @access 	protected
	 */
	protected $table = 'posts';

	/**
	 * Columns fillable by the model
	 *
	 * @access 	protected
	 */
	protected $fillable = array(
		'thread_id',
		'user_id',
		'body'
	);

	/**
	 * Allow model to interact with timestamps
	 *
	 * @access 	public
	 */
	public $timestamps = true;

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
	 * Define a belongsTo relationship with the Thread model
	 *
	 * @return 	mixed
	 */
	public function thread()
	{
		return $this->belongsTo('Thread');
	}
}