<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntrustTableSeeder extends Seeder {

	public function run()
	{
		<?php

class EntrustTableSeeder extends Seeder {

    public function run()
    {
        $scientist = new Role();

        $scientist->name         = 'citizen_scientist';
        $scientist->display_name = 'Citizen Scientist';
        $scientist->description  = 'A user wanting to submit reports on Aquifer Levels and Recharge Zones.';

        $scientist->save();

        $conservatist = new Role();

        $conservationist->name         = 'conservationist';
        $conservationist->display_name = 'Conservationist';
        $conservationist->description  = '';

        $conservationist->save();

        
        $canEditOwnRoles = new Permission();

        $canEditOwnRoles->name = 'can_edit_own_roles';
        $canEditOwnRoles->display_name = 'Can Edit Own Roles';
        $canEditOwnRoles->description = 'User has the ability to update roles within the app. This should be utilized to add an additional role if the user wants to.';

        $canEditOwnRoles->save();

        $user->attachPermissions(array(
            $canEditOwnProfile,
            $canEditOwnPosts,
            $canFlag,
            $createDigitalGroups
        ));

        $caregiver->attachPermissions(array(
            $canEditOwnProfile,
            $canEditOwnPosts,
            $canFlag,
            $createDigitalGroups
        ));

        $user = User::where('username', '=', 'Harkonnen')->first();
        $user->attachRole($admin);
        $user->attachRole($user);

        $seconduser = User::where('username', '=', 'Alex')->first();
        $seconduser->attachRole($admin);
        $seconduser->attachRole($user);

        $seconduser = User::where('username', '=', 'Meghan')->first();
        $seconduser->attachRole($admin);
        $seconduser->attachRole($advocate);

    }

}
	}

}