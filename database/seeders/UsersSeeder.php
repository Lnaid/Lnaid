<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
    		[
    			"name" => "John Doe",
    			"username" => 'johndoe',
    			"email" => "johndoe@demomail.com",
    			"phone" => "08020000001",
    			"password" => "password",
    		],

    		[
    			"name" => "Jane Doe",
    			"username" => 'janedoe',
    			"email" => "janedoe@demomail.com",
    			"phone" => "08020000002",
    			"password" => "password",	
    		],

    		[
    			"name" => "Mike Doe",
    			"username" => 'mikedoe',
    			"email" => "mikedoe@demomail.com",
    			"phone" => "08020000003",
    			"password" => "password",	
    		],

    		[
    			"name" => "Charles Doe",
    			"username" => 'charlesdoe',
    			"email" => "charlesdoe@demomail.com",
    			"phone" => "08020000004",
    			"password" => "password",	
    		],

    		[
    			"name" => "Pence Doe",
    			"username" => 'pencedoe',
    			"email" => "pencedoe@demomail.com",
    			"phone" => "08020000006",
    			"password" => "password",	
    		],

    		[
    			"name" => "Oleja Doe",
    			"username" => 'olejadoe',
    			"email" => "olejadoe@demomail.com",
    			"phone" => "08020000007",
    			"password" => "password",	
    		],
    	];

    	foreach ($users as $user) {
    		$existingUser = User::where('email', $user['email'])->get();
    		if( !$existingUser->isEmpty() ){
    			continue;
    		}
           User::create($user);
    	}
        //
    }
}
