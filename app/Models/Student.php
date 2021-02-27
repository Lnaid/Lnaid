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

        'phone',
        'phone_2',
        'about',
        'twitter',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}