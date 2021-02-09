<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Silber\Bouncer\BouncerFacade as Bouncer;

class RbacRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();

        Bouncer::role()->create([
            'name' => 'superadmin',
            'title' => 'Super Admin',
            'description' =>
                'This guy is on god mode, avoid him',
        ]);
        Bouncer::role()->create([
            'name' => 'admin',
            'title' => 'Administrator',
            'description' =>
                'Somebody who has access to all the administration features within a single site.',
        ]);
        Bouncer::role()->create([
            'name' => 'author',
            'title' => 'Author',
            'description' =>
                'Somebody who can publish and manage their own posts',
        ]);
        Bouncer::role()->create([
            'name' => 'moderator',
            'title' => 'Moderator',
            'description' =>
                'Somebody who can write and manage their own posts but cannot publish them',
        ]);
        Bouncer::role()->create([
            'name' => 'editor',
            'title' => 'Editor',
            'description' =>
                'Somebody who can publish and manage posts including the posts of other users.',
        ]);

        Bouncer::role()->create([
            'name' => 'student',
            'title' => 'Student',
            'description' =>
                'Student account role.',
        ]);


        Bouncer::role()->create([
            'name' => 'sponsor',
            'title' => 'Sponsor',
            'description' =>
                'Sponsor account role.',
        ]);


        Bouncer::role()->create([
            'name' => 'user',
            'title' => 'User',
            'description' =>
                'Somebody who can only manage their profile.',
        ]);

        Bouncer::role()->create([
            'name' => 'guest',
            'title' => 'Guest',
            'description' =>
                'This guy does not know what is happening, right?',
        ]);
    }
}
