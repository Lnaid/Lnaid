<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Sponsor;
use Illuminate\Support\Str;
use Silber\Bouncer\BouncerFacade as Bouncer;

class SponsorSeeder extends Seeder
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
            $existingSponsor = Sponsor::where('user_id', $user->id)->get();
            if( !$existingSponsor->isEmpty() ){
                continue;
            }
            Sponsor::create([
                'user_id' => $user->id,
                'phone_1' => $user->phone
            ]);

            Bouncer::assign('sponsor')->to($user);
     }
        //
 }
}
