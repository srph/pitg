<?php

class EloquentUserRepository implements ThreadRepositoryInterface {

	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct($model = null)
	{
		$this->model = $model;
	}
}