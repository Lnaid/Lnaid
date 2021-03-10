<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Student;
use App\Models\Request as RequestDB;

class RequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $requests = [
        	  [
        	  	'student_id' => 1 ,
        	  	'school_id' => 1 , 
        	  	'title' => 'Final year project', 
        	  	'slug' => Str::Slug('Final year project'),
        	  	'amount' => 50000,
        	  	// 'category_id' => 1,
        	  	// 'priority' => 1,
        	  	'description' => 'Final year project Final year project Final year project Final year projectFinal year project Final year projectFinalFinal year projectFinal year projectFinal year projectFinal year project',
        	  	'currency_id' => 1,
                'is_fund_request' => true,
        	  	'status' => 1,
        	  ],

              [
                'student_id' => 1 ,
                'school_id' => 1 , 
                'title' => 'Postgraduate Research Thesis', 
                'slug' => Str::Slug('Postgraduate Research Thesis'),
                'amount' => 135000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => 'Please help with 2021 Session tuition, Please help with 2021 Session tuition,Please help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuition',
                'currency_id' => 1,
                 'is_fund_request' => true,
                'status' => 1,
              ],

              [
                'student_id' => 1 ,
                'school_id' => 1 , 
                'title' => '2021 Session tuition', 
                'slug' => Str::Slug('2021 Session tuition'),
                'amount' => 150000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => 'Please help with 2021 Session tuition, Please help with 2021 Session tuition,Please help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuitionPlease help with 2021 Session tuition',
                'currency_id' => 1,
                'is_fund_request' => true,
                'status' => 1,
              ],

              [
                'student_id' => 2 ,
                'school_id' => 2 , 
                'title' => 'Resource for Academic Research', 
                'slug' => Str::Slug('Resource for Academic Research'),
                'amount' => 15000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => 'Please help Resource for Academic ResearchResource for Academic ResearchResourceResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic Research',
                'currency_id' => 1,
                'is_fund_request' => true,
                'status' => 1,
              ],

              [
                'student_id' => 2 ,
                'school_id' => 2 , 
                'title' => 'Laptop for Virtual Leraning', 
                'slug' => Str::Slug('Laptop for Virtual Leraning'),
                'amount' => 250,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => 'Please help with a good Laptop for Academic ResearchResource for Academic ResearchResourceResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic ResearchResource for Academic Research',
                'currency_id' => 2,
                 'is_fund_request' => true,
                'status' => 1,
              ],

              [
                'student_id' => 3 ,
                'school_id' => 3 , 
                'title' => "I'm having accommodation issues at school", 
                'slug' => Str::Slug("I'm having accommodation issues at school"),
                'amount' => 52500,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => "Kindly help!!! - I'm having accommodation issues at school I'm having accommodation issues at schoolI'm having accommodation issues at school_id I'm having accommodation issues at schoolI'm having accommodation issues at schoolI'm having accommodation issues at schoolI'm having accommodation issues at school",
                'currency_id' => 1,
                 'is_fund_request' => true,
                'status' => 1,
              ],


              [
                'student_id' => 3 ,
                'school_id' => 3 , 
                'title' => "I need money to resume at school", 
                'slug' => Str::Slug('I need money to resume at school'),
                'amount' => 85000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => "I will appreciate every help!!! - I need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at schoolI need money to resume at school",
                'currency_id' => 1,
                 'is_fund_request' => true,
                'status' => 1,
              ],

              [
                'student_id' => 2,
                'school_id' => 2 , 
                'title' => "I urgently need help with tuition", 
                'slug' => Str::Slug('I urgently need help with tuition'),
                'amount' => 95000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => "I urgently need help with tuition I urgently need help with tuitionPleaseI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuitionI urgently need help with tuition ",
                'currency_id' => 1,
                 'is_fund_request' => true,
                'status' => 1,
              ],

              [
                'student_id' => 2 ,
                'school_id' => 2 , 
                'title' => "Am unable to pay 2021 tuition at school", 
                'slug' => Str::Slug('Am unable to pay 2021 tuition at school'),
                'amount' => 125000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => "Am unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolI Am unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at schoolAm unable to pay 2021 tuition at school ",
                'currency_id' => 1,
                 'is_fund_request' => true,
                'status' => 1,
              ],

              [
                'student_id' => 2 ,
                'school_id' => 2 , 
                'title' => "I need Learning Resource for Software Development", 
                'slug' => Str::Slug('I need Learning Resource for Software Development'),
                // 'amount' => 12000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => "I need Learning Resource for Software Development I need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software DevelopmentI need Learning Resource for Software Development",
                'currency_id' => 1,
                'is_fund_request' => false,
                'status' => 1,
              ],

              [
                'student_id' => 3 ,
                'school_id' => 3 , 
                'title' => "Intern Position in an IT firm for IT", 
                'slug' => Str::Slug('Intern Position in an IT firm for IT'),
                // 'amount' => 12000,
                // 'category_id' => 1,
                // 'priority' => 1,
                'description' => "Intern Position in an IT firm for IT Intern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for ITIntern Position in an IT firm for IT",
                'currency_id' => 1,
                'is_fund_request' => false,
                'status' => 1,
              ],
        ];

        $students = Student::all();
        $i = 0;
        foreach ($students as $student) {
           $existingRequest = RequestDB::where('slug', $requests[$i]['slug'])->get();
            if( !$existingRequest->isEmpty() ){
                continue;
            }
            RequestDB::create([
                'student_id' => $student->id,
                'school_id' => $student->school->id,
                'title' => $requests[$i]['title'],
                'slug' => $requests[$i]['slug'],
                'amount' => $requests[$i]['amount'],
                'description' => $requests[$i]['description'],
                'currency_id' => $requests[$i]['currency_id'],
                'is_fund_request' => $requests[$i]['is_fund_request'],
                'status' => $requests[$i]['status'],
            ]);
            $i++;
         }
    }
}
