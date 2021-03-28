<?php

namespace App\Http\Livewire\Students;

use Livewire\Component;
use Log;
use App\Models\Student;
use App\Models\School;
use App\Models\StudentVerification;
use Livewire\WithPagination;

class Single extends Component
{	

	use WithPagination;

    public $objects = [];

    public $verificationData = [
        "bvn" => "",
        "nin" => "",
    ];


    public function render()
    {    
        return view('livewire.students.single');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function verifyBVN($id){
        $verification = StudentVerification::where('student_id', $id);
    }

}

