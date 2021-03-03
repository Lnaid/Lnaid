<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;
use Unicodeveloper\Paystack as BasePaystack;

class Paystack extends BasePaystack\Paystack
{
    use HasFactory;

    public function setKey()
    {
        $this->secretKey = Config::get('paystack.secretKey');
    }

}
