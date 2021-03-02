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
        $details->amountRaised = $donations->sum('amount');
        $details->percentageRaised = $this->calcPercentage($this->amount, $donations->sum('amount') );

        return $details;
    }

    public function calcPercentage($requested, $raised){
        $amountRequested = (float) $requested;
        $amountRaised = (float) $raised;
        if($amountRequested === 0 || $amountRaised === 0 ){
            return 0;
        }
        $percentageRaised = round( ($amountRaised/$amountRequested)*100, 2);
        return $percentageRaised;
    }

}
