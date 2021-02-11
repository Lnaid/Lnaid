<?php

namespace App\Http\Traits;
use App\Models\User;
use App\Models\Sponsor;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

trait UserAccountTrait {

    public function createSponsor($data) {
      $user = User::create($data);
      $sponsor = Sponsor::create(['user_id' => $user->id]);
      $sponsor->update($data);
      return $user;
    }

    public function createAlumni($data) {
        // Fetch all the students from the 'student' table.
       return dd($data);
    }

    public function createStudent($data) {
      $user = User::create($data);
      $student = Student::create(['user_id' => $user->id]);
      $student->update($data);
      Auth::login($user);
      return $user;
    }
}