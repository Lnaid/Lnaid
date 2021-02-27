<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    //use SoftDeletes;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    public function sender()
    {
        return $this->hasOne(Users::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->hasOne(Users::class, 'receiver_id');
    }
}
