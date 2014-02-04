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
		'body'
	);
	
}