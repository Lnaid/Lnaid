<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\HasRequestMedia;
use App\Models\Request;

class Request extends Model
{
    use HasFactory;
    //use SoftDeletes;
    use HasRequestMedia;

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

    public function comment()
    {
        return $this->hasMany(RequestComment::class, 'request_id');

    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
