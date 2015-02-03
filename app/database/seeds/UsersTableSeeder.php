<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$this->call('UserTableSeeder');
		foreach(range(1, 10) as $index)
		{
			return User::create([
				'email'=>'sulsira@hotmail.com',
				'password'=>Hash::make('shs123')
			]);
		}

	}

}
