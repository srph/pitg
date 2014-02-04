<?php namespace PITG\Repository\Profile;

use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\Profile\ProfileRepositoryInterface;

class EloquentProfileRepository extends EloquentBaseRepository  implements ProfileRepositoryInterface {

	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $profile;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct($profile = null)
	{
		$this->profile = $profile;
	}
}