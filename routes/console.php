<?php

use Illuminate\Foundation\Inspiring;
use Silber\Bouncer\BouncerFacade as Bouncer;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


// Artisan::command('rbac:assign {--role= : Role to assign}{--userID= : The ID or Email of the user }', function ($role, $userID) {
// 	$user = \App\User::where('id', $userID)->first();
// 	//$this->info($user->name);
// 	$this->info("Assigning {$role} to {$user->name}!");
// })->describe('Display an inspiring quote');


Artisan::command('rbac:setup {--superadmin}', function () {

	if( $this->option('superadmin') ){
		$userID = $this->ask('Enter user id or email?');
		$user = User::where('id', $userID)->orWhere('email', $userID)->first();
		$role = Bouncer::role()->where('name', 'superadmin')->first();

		if( $user == null ){
			return $this->info('User not found');
		}
		$user = $user->first();
		$this->info("{$user->name} will be assigned superadmin role ...");
		if ( $this->confirm('Do you wish to continue?') ) {
			Bouncer::assign($role)->to($user);
   			return $this->info('superadmin role assigned successfully');
		}	
	}else{

		$roleName = $this->ask('Enter role name?');
		$role = Bouncer::role()->where('name', $roleName)->first();
		if( $role == null ){
			return $this->info('Role not found');
		}

		$userID = $this->ask('Enter user id or email?');
		$user = User::where('id', $userID)->orWhere('email', $userID)->first();
		if($user == null){
			return $this->info('User not found');
		}
		
		$this->info("{$user->name} will be assigned {$role->name} role on culconnect");

		if ($this->confirm('Do you wish to continue?')){
			Bouncer::assign($role)->to($user);
	   		return $this->info("{$role->name} role assigned to {$user->name} successfully");
		}

	}

})->describe('Allow RBAC to be setup via console');