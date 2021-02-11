<?php

namespace App\Http\Traits;
use App\Models\User;
use App\Models\Sponsor;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Silber\Bouncer\BouncerFacade as Bouncer;

trait UserAccountTrait {

    public function createSponsor($data) {
      try {
        $data['account_type'] = 'sponsor';
        $user = User::create($data);
        $sponsor = Sponsor::create(['user_id' => $user->id]);
        $sponsor->update($data);
        // TODO - assign student role to user here
        Bouncer::assign('sponsor')->to($user);
        return $user;
      } catch (\Exception $e) {
        return $e;
      }
    }

    public function createAlumni($data) {
        // Fetch all the students from the 'student' table.
       return dd($data);
    }

    public function createStudent($data) {
     try {
        $data['account_type'] = 'student';
        $user = User::create($data);
        $student = Student::create(['user_id' => $user->id]);
        $student->update($data);
        Auth::login($user);
        // TODO - assign student role to user here
        Bouncer::assign('student')->to($user);
      return $user;
     } catch (\Exception $e) {
       return $e;
     }
    }
}