<?php namespace PITG\Repository\Hits;

use PITG\Repository\EloquentBaseRepository

class EloquentHitsRepository extends EloquentBaseRepository implements HitsRepositoryInterface {

	/**
	 * Eloquent model
	 *
	 * @var 	Illuminate\Database\Eloquent\Model
	 * @access 	protected
	 */
	protected $hits;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct(Model $hits)
	{
		parent::__construct($hits);
		$this->hits = $hits;
	}
}