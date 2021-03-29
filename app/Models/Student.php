<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    //use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id',
    	'gender',
        'pronoun',
        'dob',
        'state',
        'country',

        'school_id',
        'course',
        'department',
        'falculty',
        'level',
        'program_type',
        'matric_no',
        'admission_year',
        'graduation_year',
        'program_duration',
        'school_email',

        'bvn',
        'nin',
        'school_id_path',
        'admission_letter_path',
        'transcript_letter_path',


        'phone',
        'phone_2',
        'about',
        'twitter',

        'subaccount_id'
        'bank_name',
        'bank_code',
        'account_name',
        'account_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function school()
    {
        return $this->hasOne(School::class, 'id', 'school_id');
    }

    public function subaccount()
    {
        return $this->hasOne(SubAccount::class, 'id', 'subaccount_id');
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'student_id');
    }

    public function verificationScore()
    {
        /*
            student need atleast as score of 60
            Hint -- bvn =10, nin = 5, school_id = 30, admission_letter = 10, transcript_letter = 3, bank_details = 20
            people are mostly skeptical about releasing their bvn - so we can manage school_id(30) and account_details(20) and  admission_proof

            school_id(30) + admission_proof(10) + account_details(20) == 60

            NB - no combination without school_id and account_details will give upto 60
            NB - Account details provided must match the name on school_id and admission letter
        */
        $score = 0;
        $verification = \App\Models\StudentVerification::where('student_id', $this->id)->first();
        if(!empty($verification)){
            if($verification->bvn_verify){
                $score +=10;
            }
            if($verification->nin_verify){
                $score +=5;
            }
            if($verification->school_verify){
                $score +=30;
            }
            if($verification->admission_letter_verify){
                $score +=10;
            }   
            if($verification->transcript_letter_verify){
                $score +=3;
            }
            if($verification->bank_details_verify){
                $score +=20;
            }    
        }
        return $score;
    }
}
