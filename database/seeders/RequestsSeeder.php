<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class RequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('requests')->truncate();
           
        DB::table('requests')->insert([
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
        	  	'status' => 1,

        	  	'created_at' => Carbon::now(),
        	  ],
        ]);
    }
}
