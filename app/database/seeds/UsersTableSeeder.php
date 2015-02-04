<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		$faker = Faker::create();
		// $this->call('UserTableSeeder');
		foreach(range(1, 20) as $index)
		{
			User::create([
				'phone'=> $faker->username,
				'password'=>Hash::make($faker->word)
			]);
		}

	}

}
