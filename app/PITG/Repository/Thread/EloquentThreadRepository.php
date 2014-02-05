<?php namespace PITG\Repository\Thread;

use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\Thread\ThreadRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EloquentThreadRepository extends EloquentBaseRepository implements ThreadRepositoryInterface {

	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $thread;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct(Model $thread)
	{
		parent::__construct($thread);
		$this->thread = $thread;
	}

}