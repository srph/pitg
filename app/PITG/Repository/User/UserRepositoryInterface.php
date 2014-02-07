<?php namespace PITG\Repository\User;

interface UserRepositoryInterface {
	/**
	 * Checks if the user is logged in
	 *
	 * @return 	mixed
	 */
	public function check();
	
	/**
	 * Grab the logged in user
	 *
	 * @return 	mixed
	 */
	public function getUser();

	/**
	 * Logout the user logged in
	 *
	 * @return 	void
	 */
	public function logout();
}