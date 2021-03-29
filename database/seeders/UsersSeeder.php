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
                "name" => "Taiwo Lima",
                "email" => 'taiwo@lnaid.com',
                "username" => "Taiwo",
                "phone" => "0900000000",
                "password" => "12345678",
                "account_type" => "student"
            ],
            [
                "name" => "Aushi Atahiro",
                "email" => 'aushi@lnaid.com',
                "username" => "Audu",
                "phone" => "0810000000",
                "password" => "12345678",
                "account_type" => "student"
            ],
            [
                "name" => "Dorathy Epkemi",
                "email" => 'epkemi@lnaid.com',
                "username" => "Epkemi",
                "phone" => "0910000000",
                "password" => "12345678",
                "account_type" => "student"
            ],
            [
                "name" => "Airon Aniebet",
                "email" => 'airon@lnaid.com',
                "username" => "Airon",
                "phone" => "0811000000",
                "password" => "12345678",
                "account_type" => "sponsor"
            ],
            [
                "name" => "Muhideen Mujeeb",
                "email" => 'mujeeb@lnaid.com',
                "username" => "Mujeeba",
                "phone" => "0811100000",
                "password" => "12345678",
                "account_type" => "sponsor"
            ],
            [
                "name" => "Admin",
                "email" => 'admin@lnaid.com',
                "username" => "Mujeeb",
                "phone" => "0811100100",
                "password" => "12345678",
                "account_type" => "admin"
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
