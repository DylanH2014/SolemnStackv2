
<?php

class UserTableSeeder extends Seeder {

	public function run() {

		DB::table('users')->delete();
		User::create(array(
			'name'	   => 'Dylan Harrington',
			'username' => 'harringtonD',
			'email'	   => 'dharrington2012@yahoo.com',
			'password' => Hash::make('315Papelbon58'),
			));
	}

}