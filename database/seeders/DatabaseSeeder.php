<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
	        RbacAbilitiesSeeder::class,
	        SchoolSeeder::class,
	        RbacRoleSeeder::class,
            CurrencySeeder::class,

            UsersSeeder::class,
            StudentSeeder::class,
            SponsorSeeder::class,
            RequestsSeeder::class,
            ExchangeRateSeeder::class

	    ]);
    }
}
