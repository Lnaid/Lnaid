<?php

namespace App\Http\Livewire\Requests;

use Livewire\Component;
use App\Http\Traits\FundRequestTrait;

class Recommended extends Component
{
    public function render()
    {
    	$recommendedRequests = FundRequestTrait::recommendedRequests($total = 20, $perpage = 10);
        return view('livewire.requests.recommended', ['recommendedRequests' => $recommendedRequests]);
    }
}
