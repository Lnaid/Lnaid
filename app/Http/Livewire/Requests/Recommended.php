<?php

namespace App\Http\Livewire\Requests;

use Livewire\Component;
use App\Http\Traits\FundRequestTrait;
use Livewire\WithPagination;

class Recommended extends Component
{	use WithPagination;
    public function render()
    {
    	$recommendedRequests = FundRequestTrait::recommendedRequests($total = 20, $perpage = 3);
        return view('livewire.requests.recommended', ['recommendedRequests' => $recommendedRequests]);
    }
}
