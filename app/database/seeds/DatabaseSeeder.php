<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('Users Seeded');
		$this->call('ThreadsTableSeeder');
		$this->command->info('Threads Seeded');
		$this->call('PostsTableSeeder');
		$this->command->info('Posts Seeded');
	}

}