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
	 * @return 	Response
	 */
	public function index()
	{
		//
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

		$thread = new Thread;
		$thread->title 		= Input::get('title');
		$thread->body 		= Input::get('body');
		$thread->user_id 	= Sentry::getUser()->id;

		if($thread->save()) {
			$id = $this->thread
				->getLast()
				->id;

			// TODO: tags
			$tags = explode(',', Input::get('tags'));

			foreach($tags as $tag) {
				$thread->tags()->attach(1);
			}

			return Redirect::to('thread/' . $id);
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
			$user = $user->getUser();
			$this->thread->incrementHits($id, $client, $user->id);
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