<?php

namespace App\Http\Traits;

use App\Models\Donation;
use App\Models\Request;
use App\Models\Sponsor;

trait HasDonations
{
    /**
     * Get the URL to the request's media file.
     *
     * @return string
     */
    public function getDonations()
    {
//        if($this instanceof Request){
//            return $this->donations();
//        } elseif ($this instanceof Request){
//            return $this->donations();
//        }
        return $this->donations();
    }


    /**
     * @return string
     */
    public function getRequestDonationDetails()
    {
        $donations = Donation::where('request_id', $this->id);
        return $this->id;
    }

}
