<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Sponsor;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = User::where('account_type', 'sponsor')->get();
    	foreach ($users as $user) {
         Sponsor::create([
            'user_id' => $user->id,
            'phone_1' => $user->phone
        ]);
     }
        //
 }
}
