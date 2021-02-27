<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestComment extends Model
{
    use HasFactory;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    /**
     * Get comments that belongs to a particular request
     */

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
