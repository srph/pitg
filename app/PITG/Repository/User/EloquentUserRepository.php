<?php namespace PITG\Repository\User;

use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\User\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EloquentUserRepository implements ThreadRepositoryInterface {

	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $user;

	/**
	 * Embed model to instance
	 *
	 * @return 	void
	 */
	public function __construct(Model $user)
	{
		parent::__construct($user);
		$this->user = $user;
	}
}