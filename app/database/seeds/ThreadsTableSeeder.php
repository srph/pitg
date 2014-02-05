<?php

class ThreadsTableSeeder extends Seeder {

	public function run()
	{
		$db = DB::table('threads');

		$db->delete();

		$threads = array(
			array(
				'id'			=>	1,
				'user_id'		=>	1,
				'title'			=>	'Yolow be swagging?',
				'body'			=>	'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
									'They be like imma yolo cuz i swag ok.',
				'hits'			=>	72,
				'created_at'	=>	new DateTime,
				'updated_at'	=>	new DateTime
			),

			array(
				'id'			=>	2,
				'user_id'		=>	1,
				'title'			=>	'Yolow be swagging?',
				'body'			=>	'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
									'They be like imma yolo cuz i swag ok.',
				'hits'			=>	250,
				'created_at'	=>	new DateTime,
				'updated_at'	=>	new DateTime
			),

			array(
				'id'			=>	3,
				'user_id'		=>	2,
				'title'			=>	'Yolow be swagging?',
				'body'			=>	'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
									'They be like imma yolo cuz i swag ok.',
				'hits'			=>	69,
				'created_at'	=>	new DateTime,
				'updated_at'	=>	new DateTime
			),

			array(
				'id'			=>	4,
				'user_id'		=>	3,
				'title'			=>	'Yolow be swagging?',
				'body'			=>	'Yolo forevs cuz I too yolo. Can u yoloing cuz I has yolo swag of all. ' .
									'They be like imma yolo cuz i swag ok.',
				'hits'			=>	50,
				'created_at'	=>	new DateTime,
				'updated_at'	=>	new DateTime
			),
		);

		$db->insert($threads);
	}
}