<?php

use PITG\Repository\Thread\ThreadRepositoryInterface;

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
	 * Initialize configurations, inject repositories,
	 * and filter controllers functions
	 *
	 * @param 	ThreadRepository 	$threads
	 * @param 	ThreadEloquentRepository 	
	 * @return 	void
	 */
	public function __construct(ThreadRepositoryInterface $thread)
	{
		$this->thread = $thread;
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
			->with('threads', $this->thread->all());
	}

}