<?php namespace PITG\Repository\Thread;

interface ThreadRepositoryInterface {

	/**
	 * Fetch a thread with the requested ID
	 *
	 * @return 	mixed
	 */
	public function byId($id);

	/**
	 * Increment thread's hits
	 *
	 * @param 	Thread 	$thread
	 * @param 	string 	$client
	 * @param 	User 	$user_id
	 * @return 	boolean
	 */
	public function incrementHits($thread, $client, $user_id);

	/**
	 * Fetch threads according to hits
	 * and its date posted
	 *
	 * @return 	mixed
	 */
	public function getTrending();

	/**
	 * Fetch the latest threads
	 *
	 * @return 	mixed
	 */
	public function getLatest();
}