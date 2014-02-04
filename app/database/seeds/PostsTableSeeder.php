<?php

class PostsDatabaseSeeder extends Seeder {

	public function run()
	{
		$db = DB::table('posts');

		$db->delete();

		$posts = array(
			array(
				'id'			=>		1,
				'thread_id'		=>		1,
				'user_id'		=>		1,
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		2,
				'thread_id'		=>		1,
				'user_id'		=>		1,
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		3,
				'thread_id'		=>		2,
				'user_id'		=>		2,
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		4,
				'thread_id'		=>		3,
				'user_id'		=>		3,
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),
		);

		$db->create($threads);
	}
}