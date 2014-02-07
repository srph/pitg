<?php

class Vote extends Eloquent {

	/**
	 * Table used by the model
	 *
	 * @access 	protected
	 */
	protected $table = 'votes';

	/**
	 * Columns fillable by the model
	 *
	 * @access 	protected
	 */
	protected $fillable = array(
		'thread_id',
		'user_id',
		'value'
	);
	
	/**
	 * Allow model to interact with timestamps
	 *
	 * @access 	public
	 */
	public $timestamps = true;
}