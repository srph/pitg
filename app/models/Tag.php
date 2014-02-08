<?php

class Tag extends Eloquent {

	/**
	 * Define a belongsTo relationship with the Tag model
	 *
	 * @return  mixed
	 */
	function threads()
	{
		return $this->belongsToMany('Thread');
	}

}