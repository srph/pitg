<?php namespace PITG\Repository\Hit;

interface HitRepositoryInterface {

	/**
	 * Validate if the hit counts
	 *
	 * @param 	Thread 	$thread
	 * @param 	string 	$client
	 * @param 	User 	$user_id
	 * @return 	boolean
	 */
	public function validate($thread = null, $client = null, $user_id = null);
}