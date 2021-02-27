<?php

namespace App\Http\Traits;

use App\Models\Donation;
use App\Models\Request;
use App\Models\Sponsor;

trait HasRequestStats
{
 
    /**
     * @return array
     */
    public function getStats()
    {
        $donations = Donation::where('request_id', $this->id);
        $details = collect();
        $details->totalDonations = $donations->count();
        $details->amountRaised = 40000;
        return $details;
    }

}
