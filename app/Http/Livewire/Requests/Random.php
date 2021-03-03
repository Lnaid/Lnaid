<?php

namespace App\Http\Livewire\Requests;

use Livewire\Component;
use App\Http\Traits\FundRequestTrait;

class Random extends Component
{
    public function render()
    {
    	$randomRequests = FundRequestTrait::getRandomRequests($total = 20);
        return view('livewire.requests.random', ['randomRequests' => $randomRequests]);
    }
}
