<?php

class ThreadsDatabaseSeeder extends Seeder {

	public function run()
	{
		$db = DB::table('threads');

		$db->delete();

		$threads = array(
			array(
				'id'			=>		1,
				'user_id'		=>		1,
				'title'			=>		'Yolow be swagging?',
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		2,
				'user_id'		=>		1,
				'title'			=>		'Yolow be swagging?',
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		3,
				'user_id'		=>		2,
				'title'			=>		'Yolow be swagging?',
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),

			array(
				'id'			=>		4,
				'user_id'		=>		3,
				'title'			=>		'Yolow be swagging?',
				'text'			=>		'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
										'They be like imma yolo cuz i swag ok.',
				'created_at'	=>		new DateTime,
				'updated_at'	=>		new DateTime
			),
		);

		$db->create($threads);
	}
}