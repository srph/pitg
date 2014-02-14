<?php

use PITG\Repository\User\UserRepositoryInterface;

class SettingsController extends BaseController {

	/**
	 * User repository
	 *
	 * @var \PITG\Repository\User\UserRepositoryInterface
	 */
	protected $user;

	/**
	 * Initialize controller configurations,
	 * apply filter, and load database repositories
	 *
	 * @return 	void
	 */
	public function __construct(UserRepositoryInterface $user)
	{
		$this->user = $user;
	}

	/**
	 * Display user's account information and settings
	 *
	 * @return 	View
	 */
	public function getAccount()
	{
		return View::make('settings.account')
			->with('user', $this->user);
	}

}