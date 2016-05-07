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

		DB::table('users')->delete();
		DB::table('roles')->delete();
		DB::table('password_reminders')->delete();
		DB::table('permissions')->delete();
		DB::table('permission_role')->delete();
		DB::table('role_user')->delete();
		DB::table('diys')->delete();
		DB::table('tags')->delete();
		DB::table('diy_tag')->delete();
		DB::table('ratings')->delete();
		DB::table('diy_rating')->delete();
		DB::table('usages')->delete();
		DB::table('instances')->delete();
		

		$this->call('UsersTableSeeder');
		$this->call('DiysTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('RatingsTableSeeder');
		$this->call('UsagesTableSeeder');
		$this->call('InstancesTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('ReportsTableSeeder');
		$this->call('DiyTagsTableSeeder');
		$this->call('DiyRatingsTableSeeder');
	}

}
