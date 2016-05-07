<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
        $user->email                 = 'thafez@ymail.com';
        $user->username              = 'Harkonnen';
        $user->first_name            = 'Tarek';
        $user->last_name             = 'Hafez';
        $password                    = 'password';
        $user->password              = $password;
        $user->password_confirmation = $password;
        
        if ($user->isValid()) {
            $user->save();
        } else {
            echo $user->getErrors()->toArray();
        }

        $user = new User();
        $user->email                 = 'bob@bob.bob';
        $user->username              = 'MKSocks91';
        $user->first_name            = 'Mary';
        $user->last_name             = 'Warren';
        $password                    = 'password1';
        $user->password              = $password;
        $user->password_confirmation = $password;
    
        if ($user->isValid()) {
            $user->save();
        } else {
            echo $user->getErrors()->toArray();
        }

        $user = new User();
        $user->email                 = 'andrew@bandrew.can';
        $user->username              = 'PomoFomo';
        $user->first_name            = 'Andrew';
        $user->last_name             = 'Powell-Morse';
        $password                    = 'password2';
        $user->password              = $password;
        $user->password_confirmation = $password;

        if ($user->isValid()) {
            $user->save();
        } else {
            echo $user->getErrors()->toArray();
        }

        $user = new User();
        $user->email                 = 'taylor@taynay.can';
        $user->username              = 'Gobbledegook';
        $user->first_name            = 'Taylor';
        $user->last_name             = 'Hobbs';
        $password                    = 'password3';
        $user->password              = $password;
        $user->password_confirmation = $password;

        if ($user->isValid()) {
            $user->save();
        } else {
            echo $user->getErrors()->toArray();
        }
	}

}