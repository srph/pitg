<?php namespace PITG\Repository\Category;

use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\Category\CategoryRepositoryInterface;

class EloquentCategoryRepository extends EloquentBaseRepository implements CategoryRepositoryInterface {
	
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