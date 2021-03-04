<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use App\Models\Request as RequestDb;
use Illuminate\Support\Str;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$students = Student::get();
    	foreach ($students as $st) {
         RequestDb::create([
            'student_id' => $st->id,
            'school_id' => $st->school_id,
            'title' => 'School Fees',
            'slug' => 'school-fees',
            'amount' => 1000,
            'priority' => 'high',
            'visibility' => 'public',
            'description' => 'i need it for school fees',
            'currency_id' => 66,
        ]);
     }
        //
 }
}
