<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		
		$users = array(
			array(
				'id'			=>		1,
				'email'			=>		'one@one.com',
				'password'		=>		'1234',
				'activated'		=>		1,
				'first_name'	=>		'Yolo',
				'last_name'		=>		'Swagity',
			),

			array(
				'id'			=>		2,
				'email'			=>		'two@one.com',
				'password'		=>		'1234',
				'activated'		=>		1,
				'first_name'	=>		'Swaggs Be',
				'last_name'		=>		'Yolowing',
			),

			array(
				'id'			=>		3,
				'email'			=>		'three@one.com',
				'password'		=>		'1234',
				'activated'		=>		1,
				'first_name'	=>		'Nature',
				'last_name'		=>		'Swag',
			),

			array(
				'id'			=>		4,
				'email'			=>		'four@one.com',
				'password'		=>		'1234',
				'activated'		=>		1,
				'first_name'	=>		'Justin',
				'last_name'		=>		'Swagity',
			),
		);

		foreach($users as $user) {
			Sentry::getUserProvider()->create($user);
		}

	}
}