<?php

namespace App\Http\Livewire\Requests;

use Livewire\Component;
use App\Http\Traits\FundRequestTrait;

class Featured extends Component
{
    public function render()
    {
    	$featuredRequests = FundRequestTrait::featuredRequests($total = 20, $perpage = 10);
        return view('livewire.requests.featured', ['featuredRequests' => $featuredRequests]);
    }
}
