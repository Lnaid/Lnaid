<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id',
    	'display_name',
        'phone_1',
        'phone_2',
        'work_email',
        'sponsor_type',
        'location',
        'about',
        'website',
        'twitter',
        'linkedin',
        'facebook',
    ];
}
