<?php

namespace App\Http\Traits;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
//use the Rave Facade
use Rave;

trait SubAccountTrait {

    public function createSubAccount($data) {
      try {
       // $data = [
       //      'account_bank' => $this->request->account_bank,
       //      'account_number' => $this->request->account_number,
       //      'business_name' => $this->request->business_name,
       //      'business_email' => $this->request->business_email,
       //      'business_contact' => $this->request->business_contact,
       //      'business_contact_mobile' => $this->request->business_contact_mobile,
       //      'business_mobile' => $this->request->business_mobile,
       //      'meta' => $meta,
       //      'seckey' => $this->secretKey,
       //      'split_type' => $this->request->split_type,
       //      'split_value' => $this->request->split_value,
       //      'country' => $this->request->country
       //  ];

        $subAccount = Rave::createSubAccount($data);
        return $subAccount;
      } catch (\Exception $e) {
        return $e;
      }
    }


}