<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
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
    	$users = User::where('account_type', 'student')->get();
    	foreach ($users as $user) {
         Student::create([
            'user_id' => $user->id,
            'phone' => $user->phone,
            'school_id' => 1
        ]);
     }
        //
 }
}
