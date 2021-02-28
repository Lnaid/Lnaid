<?php

namespace App\Http\Traits;


trait HasStudentDetails
{
    /**
     * Get the URL to the user's profile photo.
     *
     * @return string
     */
    public function studentDetails()
    {
        $details = collect();
        $details->name = $this->student->user->name;
        $details->photo = $this->student->user->profile_photo_url;
        $details->school = $this->student->school->name;
        $details->totalRequest = $this->student->requests->count();
        return $details;
    }
}
