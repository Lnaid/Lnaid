<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = [
    		[
    			"user_id" => 1,
    			"school_id" => 1,
    		],

    		[
    			"user_id" => 2,
    			"school_id" => 2,
    		],

    		[
    			"user_id" => 3,
    			"school_id" => 3,
    		],

    		[
    			"user_id" => 4,
    			"school_id" => 2,
    		]

    	];

    	foreach ($students as $student) {
    		$existingStudent = Student::where('user_id', $student['user_id'])->get();
    		if( !$existingStudent->isEmpty() ){
    			continue;
    		}
           Student::create($student);
    	}
    }
}
