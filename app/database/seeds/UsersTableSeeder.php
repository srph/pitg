<?php

class UserDatabaseSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		
		$users = array(
			array(
				'id'			=>		1,
				'email'			=>		'one@one.com',
				'password'		=>		'1234',
				'first_name'	=>		'Yolo',
				'last_name'		=>		'Swagity',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		2,
				'email'			=>		'two@one.com',
				'password'		=>		'1234',
				'first_name'	=>		'Swaggs Be',
				'last_name'		=>		'Yolowing',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		3,
				'email'			=>		'three@one.com',
				'password'		=>		'1234',
				'first_name'	=>		'Nature',
				'last_name'		=>		'Swag',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		4,
				'email'			=>		'four@one.com',
				'password'		=>		'1234',
				'first_name'	=>		'Justin',
				'last_name'		=>		'Swagity',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),
		);

		Sentry::getUserProvider()->create($users);
	}
}