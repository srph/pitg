<?php namespace PITG\Repository\Thread;

use PITG\Repository\Thread\ThreadRepositoryInterface;

class EloquentThreadRepository implements ThreadRepositoryInterface {

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

	public function all()
	{
		return Thread::all();
	}

}