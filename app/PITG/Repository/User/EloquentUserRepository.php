<?php namespace PITG\Repository\User;

use Sentry;
use PITG\Repository\EloquentBaseRepository;
use PITG\Repository\User\UserRepositoryInterface;

class EloquentUserRepository extends EloquentBaseRepository implements UserRepositoryInterface {

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
	public function __construct(Sentry $user)
	{
		parent::__construct($user);
		$this->user = $user;
	}

	/**
	 * Checks if the user is logged in
	 *
	 * @return 	mixed
	 */
	public function check()
	{
		return Sentry::check();
	}

	/**
	 * Grab the logged in user
	 *
	 * @return 	mixed
	 */
	public function getUser()
	{
		return Sentry::getUser();
	}

	/**
	 * Logout the user logged in
	 *
	 * @return 	void
	 */
	public function logout()
	{
		Sentry::logout();
	}

	/**
	 * Checks if the user owns the given variable
	 * by comparing their id
	 *
	 * @return 	boolean
	 */
	public function owns($var)
	{
		$user_id = $this->getUser()->id;
		return ($user_id == $var->user_id)
			? true
			: false;
	}
}