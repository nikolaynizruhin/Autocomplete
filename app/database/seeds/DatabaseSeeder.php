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

		$this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array('email' => 'johnny@email.com', 'name' => 'Johnny'));
		User::create(array('email' => 'fred@email.com', 'name' => 'Fred'));
		User::create(array('email' => 'jo@email.com', 'name' => 'Jo'));
		User::create(array('email' => 'mike@email.com', 'name' => 'Mike'));
		User::create(array('email' => 'antony@email.com', 'name' => 'Antony'));
		User::create(array('email' => 'tom@email.com', 'name' => 'Tom'));
		User::create(array('email' => 'brad@email.com', 'name' => 'Brad'));
		User::create(array('email' => 'frank@email.com', 'name' => 'Frank'));
		User::create(array('email' => 'craig@email.com', 'name' => 'Craig'));
		User::create(array('email' => 'simon@email.com', 'name' => 'Simon'));
	}

}