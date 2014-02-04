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
		'thread_id'
		'user_id',
		'body'
	);
}