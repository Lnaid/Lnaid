<?php

namespace App\Http\Livewire\Requests;

use Livewire\Component;
use App\Http\Traits\FundRequestTrait;
use Livewire\WithPagination;

class Featured extends Component
{
	use WithPagination;
	
    public function render()
    {
    	$featuredRequests = FundRequestTrait::featuredRequests($total = 20, $perpage = 4);
        return view('livewire.requests.featured', ['featuredRequests' => $featuredRequests]);
    }
}
