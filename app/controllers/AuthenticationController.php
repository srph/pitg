<?php

use PITG\Repository\User\UserRepositoryInterface;

class AuthenticationController extends BaseController {

	/**
	 * Eloquent model
	 *
	 * @var Illuminate\Database\Eloquent\Model
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
		$this->beforeFilter('guest', array('only' => array('postLogin')));
		$this->beforeFilter('csrf', array('only' => array('postLogin')));
		$this->beforeFilter('auth', array('only' => array('getLogout')));
	}

	/**
	 * Authenticate the user
	 * 
	 * @return 	Response
	 */
	public function postLogin()
	{
		try {
			$user = array(
				'email'			=>	Input::get('email'),
				'password'		=>	Input::get('password')
			);

			// Implement remember me
			Sentry::authenticate($user, false);
		} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
			$msg = 'Login field is required.';
		} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
			$msg = 'Password field is required.';
		} catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
		    $msg = 'Wrong password, try again.';
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
		    $msg = 'User was not found.';
		} catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
		    $msg = 'User is not activated.';
		} catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
		    $msg = 'User is suspended.';
		} catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
		    $msg = 'User is banned.';
		}

		Session::flash('success', 'You have been logged in!');
		return Redirect::intended('/');
	}

	/**
	 * Logout the authenticated user
	 * 
	 * @return 	Response
	 */
	public function getLogout()
	{		
		$this->user->logout();
		Session::flash('success', 'You have been logged out');
		
		return Redirect::route('home');
	}
}