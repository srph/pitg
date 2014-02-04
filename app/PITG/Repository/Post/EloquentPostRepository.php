<?php namespace PITG\Repository\Post;

use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\Post\PostRepositoryInterface;

class EloquentPostRepository extends EloquentBaseRepository implements PostRepositoryInterface {
	
	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $post;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct($post = null)
	{
		$this->post = $post;
	}
}