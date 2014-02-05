<?php

use PITG\Repository\Thread\ThreadRepositoryInterface;
use PITG\Repository\Post\PostRepositoryInterface;

class ThreadController extends BaseController {

	/**
	 * Thread repository
	 *
	 * @var \PITG\Repository\Thread\ThreadRepositoryInterface
	 */
	protected $thread;

	/**
	 * Post repository
	 *
	 * @var \PITG\Repository\Post\PostRepositoryInterface
	 */
	protected $post;

	/**
	 * Initialize controller configurations,
	 * apply filter, and load database repositories
	 *
	 * @return 	void
	 */
	public function __construct(ThreadRepositoryInterface $thread)
	{
		$this->thread = $thread;
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
		//
	}

	/**
	 * Store the new resource
	 *
	 * @return 	Response
	 */
	public function store()
	{
		//
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

		if(!$thread) {
			return App::abort('404');
		}

		return View::make('thread.show')
			->with('thread', $thread)
			->with('posts', $thread->posts);
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