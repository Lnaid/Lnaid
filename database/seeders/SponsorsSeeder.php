<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsors = [
    		[
    			"user_id" => 5,
    			"sponsor_type" => 'individual',
    			"display_name" => 'Mr. John Kenedy',
    			"location" => 'Abuja',

    		],

    		[
    			"user_id" => 6,
    			"sponsor_type" => 'corporate',
    			"display_name" => 'UNICEF Nigeria',
    			"location" => 'Lagos',

    		],

    	];

    	foreach ($sponsors as $sponsor) {
    		$existingSponsor = Sponsor::where('user_id', $sponsor['user_id'])->get();
    		if( !$existingSponsor->isEmpty() ){
    			continue;
    		}
           Sponsor::create($sponsor);
    	}
    }
}
