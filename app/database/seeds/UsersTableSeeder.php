<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('users')->delete();

		$users = array(
			["username" => "admin", "email" => "thanhcttsp@nadia.bz", "password" => '$2y$10$D2jSgBRrS4jfnFnzVM9aROkszqIDRAtfBEq69a1q5eXlN2fBRboU6'],
		);

		// Uncomment the below to run the seeder
		 DB::table('users')->insert($users);
	}

}
