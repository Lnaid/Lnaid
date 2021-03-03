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

    public function getSender()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    public function getReceiver()
    {
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }
}
