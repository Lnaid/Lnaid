<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use App\Models\School;
use App\Models\SubAccount;
use Illuminate\Support\Str;
use Silber\Bouncer\BouncerFacade as Bouncer;

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
        $schools = School::all()->pluck('id')->toArray();
    	foreach ($users as $user) {
            $existingStudent = Student::where('user_id', $user->id)->get();
            if( !$existingStudent->isEmpty() ){
                continue;
            }
            $student = Student::create([
                'user_id' => $user->id,
                'phone' => $user->phone,
                'school_id' => $schools[array_rand($schools)]
            ]);

            Bouncer::assign('student')->to($user);
            SubAccount::create([
                'student_id' => $student->id
            ]);
        }
        //
    }
}
