<?php

namespace App\Http\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\Features;

trait HasStudentDetails
{
    /**
     * Get the URL to the user's profile photo.
     *
     * @return string
     */
    public function studentDetails()
    {    return $details = [
            'photo' => $this->student->user->profile_photo_url,
            'name' => $this->student->user->name
        ];
    }
}
