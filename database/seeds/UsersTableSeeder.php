<?php

use Illuminate\Database\Seeder;

use App\User;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        for ($i=0; $i < 1; $i++) { 
        	$user->first_name = 'admin';
	        $user->last_name = 'system';
	        $user->email = 'admin@cutionline.com';
	        $user->password = 'adminadmin';
	        $user->role_id = 1;
	        $user->save();
        }

    }
}
