<?php

class Hit extends Eloquent {
	
		/**
	 * Table used by the model
	 *
	 * @access 	protected
	 */
	protected $table = 'hits';

	/**
	 * Columns fillable by the model
	 *
	 * @access 	protected
	 */
	protected $fillable = array(
		'ip_address',
		'thread_id',
		'user_id'
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