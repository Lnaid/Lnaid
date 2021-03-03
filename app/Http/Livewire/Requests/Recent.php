<?php

namespace App\Http\Livewire\Requests;

use Livewire\Component;
use App\Http\Traits\FundRequestTrait;
use Livewire\WithPagination;

class Recent extends Component
{
	use WithPagination;
	// protected $paginationTheme = 'bootstrap';

    public function render()
    {
    	$recentRequests = FundRequestTrait::getRecentRequests($total = 20, $perpage = 3);
        return view('livewire.requests.recent', ['recentRequests' => $recentRequests]);
    }
}
