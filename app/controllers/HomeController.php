<?php

use PITG\Repository\Thread\ThreadRepositoryInterface;
use PITG\Repository\User\UserRepositoryInterface;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/**
	 * Thread repository
	 *
	 * @var \PITG\Repository\Thread\ThreadRepositoryInterface
	 */
	protected $thread;

	/**
	 * User repository
	 *
	 * @var \PITG\Repository\User\UserRepositoryInterface
	 */
	protected $user;

	/**
	 * Initialize configurations, inject repositories,
	 * and filter controllers functions
	 *
	 * @param 	ThreadRepository 	$threads
	 * @param 	ThreadEloquentRepository 	
	 * @return 	void
	 */
	public function __construct(
		ThreadRepositoryInterface $thread,
		UserRepositoryInterface $user)
	{
		$this->thread = $thread;
		$this->user = $user;
	}

	/**
	 * Renders the view for the home page
	 *
	 * @link 	/
	 * @return 	Response
	 */
	public function getIndex()
	{
		return View::make('index')
			->with('hot', $this->thread->getHot())
			->with('recent', $this->thread->getRecent())
			->With('user', $this->user);
	}

}