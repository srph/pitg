<?php

class AuthenticationController extends BaseController {

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
				'password'		=>	Input::get('password');
			);

			Sentry::authenticate($user, Input::get('remember'));
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

		return Redirect::route('home');
	}

	/**
	 * Logout the authenticated user
	 * 
	 * @return 	Response
	 */
	public function getLogout()
	{
		if(Sentry::)
		Sentry::logout();
		Session::flash('success', 'You have been logged out');
		return Redirect::to('home');
	}
}