<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;
use Illuminate\Support\Str;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$schools = [
    		[
    			"name" => "Federal University of Technology, Minna",
    			"slug" => Str::slug("Federal University of Technology, Minna"),
    			"abbr" => "FUTMinna",
    			"city" => "Minna",
    			"state" => "Niger State",
    			"country" => "Nigeria",
    			"status" => "approve"	
    		],

    		[
    			"name" => "Ibrahim Babangida Univerisity, Bida",
    			"slug" => Str::slug("Ibrahim Babangida Univerisity, Bida"),
    			"abbr" => "FUTMinna",
    			"city" => "Bida",
    			"state" => "Niger State",
    			"country" => "Nigeria",
    			"status" => "approve"	
    		],

    		[
    			"name" => "Univerisity of Abuja",
    			"slug" => Str::slug("Univerisity of Abuja"),
    			"abbr" => "Uni Abuja",
    			"city" => "Suaka",
    			"state" => "Abuja",
    			"country" => "Nigeria",
    			"status" => "approve"	
    		]
    	];

    	foreach ($schools as $school) {
    		$existingSchool = School::where('slug', $school['slug'])->get();
    		if( !$existingSchool->isEmpty() ){
    			continue;
    		}
           School::create($school);
    	}
        //
    }
}
