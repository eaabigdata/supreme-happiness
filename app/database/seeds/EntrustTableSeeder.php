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
        $conservationist->description  = 'A user interacting with the application to submit and share water usage reports, diy feedback on how they conserve water, and sharing their progress on social media.';

        $conservationist->save();

        
        $canEditOwnRoles = new Permission();

        $canEditOwnRoles->name         = 'can_edit_own_roles';
        $canEditOwnRoles->display_name = 'Can Edit Own Roles';
        $canEditOwnRoles->description  = 'User has the ability to update roles within the app. This should be utilized to add an additional role if the user wants to.';

        $canEditOwnRoles->save();

        $canPostReports = new Permission();

        $canPostReports->name         = 'can_post_reports';
        $canPostReports->display_name = 'Can Post Reports';
        $canPostReports->description  = 'User can submit reports to the EAA for scientific analysis and feedback.'

        $canPostReports->save();

        $canViewOwnProfile = new Permission();

        $canViewOwnProfile->name         = 'can_view_own_profile';
        $canViewOwnProfile->display_name = 'Can Post Reports';
        $canViewOwnProfile->description  = 'User can submit reports to the EAA for scientific analysis and feedback.'

        $canViewOwnProfile->save();


        $scientist->attachPermissions(array(
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