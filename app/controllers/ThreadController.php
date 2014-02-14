<?php

use PITG\Repository\Thread\ThreadRepositoryInterface;
use PITG\Repository\User\UserRepositoryInterface;

class ThreadController extends BaseController {

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
	 * Initialize controller configurations,
	 * apply filter, and load database repositories
	 *
	 * @return 	void
	 */
	public function __construct(
		ThreadRepositoryInterface $thread,
		UserRepositoryInterface $user)
	{
		$this->thread = $thread;
		$this->user = $user;

		$this->beforeFilter('auth', array('only' => array('create')));
		$this->beforeFilter('csrf', array('only' => array('store')));
	}

	/**
	 * Show a listing of the resource
	 *
	 * @return 	Redirect
	 */
	public function index()
	{
		return Redirect::to('/');
	}

	/**
	 * Create a new resource
	 *
	 * @return 	Response
	 */
	public function create()
	{
		return View::make('thread.create')
			->with('user', $this->user);
	}

	/**
	 * Store the new resource
	 *
	 * @return 	Response
	 */
	public function store()
	{
		// [] Validate
		$data = Input::all();
		$data['user_id'] = $this->user
			->loggedIn()
			->id;

		if($this->thread->post($data)) {
			$thread_id = $this->thread
				->getLast()
				->id;

			Session::flash('success', 'You have successfully posted the thread');
			return Redirect::to('thread/' . $thread_id);
		}
		
		return Redirect::to('thread/create')
			->withInput();
	}

	/**
	 * Show the requested resource
	 *
	 * @param 	integer 	$id
	 * @return 	Response
	 */
	public function show($id)
	{
		// Fetch the thread of the requested id
		$thread = $this->thread->byId($id);

		// If thread does not exist, abort application
		if(!$thread) {
			return App::abort('404');
		}

		$user = $this->user;
		// Grab the client' ip Increment hits
		if($user->check()) {
			$client = '\'' . Request::getClientIp() . '\'';
			$user = $user->loggedIn();
			$this->thread->incrementHits($thread, $client, $user->id);
		}

		return View::make('thread.show')
			->with('thread', $thread)
			->with('posts', $thread->posts)
			->with('user', $this->user);
	}

	/**
	 * Edit the requested resource
	 *
	 * @param 	integer 	$id
	 * @return 	Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the requested resource
	 *
	 * @param 	integer 	$id
	 * @return 	Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Destroy the requested resource
	 *
	 * @param 	integer 	$id
	 * @return 	Response
	 */
	public function destroy($id)
	{
		//
	}
}