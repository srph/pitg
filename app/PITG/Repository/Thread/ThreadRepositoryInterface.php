<?php namespace PITG\Repository\Thread;

interface ThreadRepositoryInterface {

	/**
	 * Fetch a thread with the requested ID
	 *
	 * @return 	mixed
	 */
	public function byId($id);
}