<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\HasRequestMedia;
use App\Http\Traits\HasStudentDetails;
use App\Http\Traits\HasRequestStats;
use App\Models\Request;
use App\Models\Currency;

class Request extends Model
{
    use HasFactory;
    //use SoftDeletes;
    use HasRequestMedia;
    use HasStudentDetails;
    use HasRequestStats;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];


    public function media()
    {
        return $this->hasOne(RequestMedia::class, 'request_id');
    }

    public function currency()
    {
        // $requestCurrency = Currency::find($this->currency_id);
        // return $requestCurrency;
        return $this->hasOne('App\Models\Currency', 'id', 'currency_id' );
    }

    public function comments()
    {
        return $this->hasMany(RequestComment::class, 'request_id');

    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');

    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'request_id');

    }



}
