<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use the Rave Facade
use Rave;

class RaveController extends Controller
{

  /**
   * Initialize Rave payment process
   * @return void
   */
  public function initialize()
  {
    //This initializes payment and redirects to the payment gateway
    //The initialize method takes the parameter of the redirect URL
    Rave::initialize(route('callback'));
  }

  /**
   * Obtain Rave callback information
   * @return void
   */
  public function callback()
  {

    $responsePayload =  json_decode( request()->resp);
    $tx = $responsePayload->tx; // or $responseObject->data->data
    $txRef = $tx->txRef;
    $txStatus = $tx->status;

    $verifiedTx = Rave::verifyTransaction($txRef);

    $verifiedTxchargeResponsecode = $verifiedTx->data->chargecode;
    $verifiedTxChargeAmount = $verifiedTx->data->amount;
    $verifiedTxChargeCurrency = $verifiedTx->data->currency;
    
    $txChargeAmount = $tx->data->amount;
    $txCurrency = $tx->data->amount;

    if (($verifiedTxchargeResponsecode == "00" || $verifiedTxchargeResponsecode == "0") && ($verifiedTxChargeAmount == $txChargeAmount)  && ($verifiedTxChargeCurrency == $txCurrency)) {
    // transaction was successful...
    // please check other things like whether you already gave value for this ref
    // if the email matches the customer who owns the product etc
    //Give Value and return to Success page
    
        return redirect('/success');
    
    } else {
        //Dont Give Value and return to Failure page
    
        return redirect('/failed');
    }


    return redirect()->route('test.callback')->with('data', $verifiedData);


    // Response object contains
        // +"name": "opop"
        // +"data": {#1435 ▶}
        // +"tx": {#1440 ▶}
        // +"success": true

    // Transaction Details
    // +"tx": {#1440 ▼
    //       +"id": 1938446
    //       +"txRef": "rave_603cfd42a0d35"
    //       +"orderRef": "URF_EFEFBFB6B67DDFD6F8_9758731"
    //       +"flwRef": "FLW-M03K-f5f8cdf00ebb618620e08c4d3a3020d8"
    //       +"redirectUrl": "http://lnaid.air/donations/rave/callback"
    //       +"device_fingerprint": "2b5233ecaf513c752d0b13cf3ee6b357"
    //       +"settlement_token": null
    //       +"cycle": "one-time"
    //       +"amount": 4
    //       +"charged_amount": 4
    //       +"appfee": 0.06
    //       +"merchantfee": 0
    //       +"merchantbearsfee": 1
    //       +"chargeResponseCode": "00"
    //       +"raveRef": null
    //       +"chargeResponseMessage": "Approved"
    //       +"authModelUsed": "noauth-saved-card"
    //       +"currency": "NGN"
    //       +"IP": "197.210.70.188"
    //       +"narration": "Airdge NG"
    //       +"status": "successful"
    //       +"modalauditid": "2d89f1e7bc3619344d388a028e2447cb"
    //       +"vbvrespmessage": "Approved"
    //       +"authurl": "N/A"
    //       +"vbvrespcode": "00"
    //       +"acctvalrespmsg": null
    //       +"acctvalrespcode": null
    //       +"paymentType": "card"
    //       +"paymentPlan": 362
    //       +"paymentPage": null
    //       +"paymentId": "6490"
    //       +"fraud_status": "ok"
    //       +"charge_type": "normal"
    //       +"is_live": 0
    //       +"retry_attempt": null
    //       +"getpaidBatchId": null
    //       +"createdAt": "2021-03-01T14:42:38.000Z"
    //       +"updatedAt": "2021-03-01T14:42:39.000Z"
    //       +"deletedAt": null
    //       +"customerId": 690723
    //       +"AccountId": 694020
    //       +"customer": {#1442 ▶}
    //       +"chargeToken": {#1443 ▶}


    // Customer
    // +"customer": {#1441 ▼
    //           +"id": 690723
    //           +"phone": "8134649622"
    //           +"fullName": "Oluwole Adebiyi"
    //           +"customertoken": null
    //           +"email": "rasheed@gmail.com"
    //           +"createdAt": "2021-03-01T13:10:17.000Z"
    //           +"updatedAt": "2021-03-01T13:10:17.000Z"
    //           +"deletedAt": null
    //           +"AccountId": 694020

    // Data
    // +"data": {#1436 ▼
    //         +"id": 1938446
    //         +"txRef": "rave_603cfd42a0d35"
    //         +"orderRef": "URF_EFEFBFB6B67DDFD6F8_9758731"
    //         +"flwRef": "FLW-M03K-f5f8cdf00ebb618620e08c4d3a3020d8"
    //         +"redirectUrl": "http://lnaid.air/donations/rave/callback"
    //         +"device_fingerprint": "2b5233ecaf513c752d0b13cf3ee6b357"
    //         +"settlement_token": null
    //         +"cycle": "one-time"
    //         +"amount": 4
    //         +"charged_amount": 4
    //         +"appfee": 0.06
    //         +"merchantfee": 0
    //         +"merchantbearsfee": 1
    //         +"chargeResponseCode": "00"
    //         +"raveRef": null
    //         +"chargeResponseMessage": "Approved"
    //         +"authModelUsed": "noauth-saved-card"
    //         +"currency": "NGN"
    //         +"IP": "197.210.70.188"
    //         +"narration": "Airdge NG"
    //         +"status": "successful"
    //         +"modalauditid": "2d89f1e7bc3619344d388a028e2447cb"
    //         +"vbvrespmessage": "Approved"
    //         +"authurl": "N/A"
    //         +"vbvrespcode": "00"
    //         +"acctvalrespmsg": null
    //         +"acctvalrespcode": null
    //         +"paymentType": "card"
    //         +"paymentPlan": 362
    //         +"paymentPage": null
    //         +"paymentId": "6490"
    //         +"fraud_status": "ok"
    //         +"charge_type": "normal"
    //         +"is_live": 0
    //         +"retry_attempt": null
    //         +"getpaidBatchId": null
    //         +"createdAt": "2021-03-01T14:42:38.000Z"
    //         +"updatedAt": "2021-03-01T14:42:39.000Z"
    //         +"deletedAt": null
    //         +"customerId": 690723
    //         +"AccountId": 694020
    //         +"customer": {#1441 ▶}
    //         +"chargeToken": {#1427 ▶}
    //       }


    // Verified Data
    // "data" => {#1438 ▼
    //     +"status": "success"
    //     +"message": "Tx Fetched"
    //     +"data": {#1435 ▼
    //       +"txid": 1938496
    //       +"txref": "rave_603d03f6f0f50"
    //       +"flwref": "FLW-M03K-cb280032c31b7320c710008c761f21ae"
    //       +"devicefingerprint": "2b5233ecaf513c752d0b13cf3ee6b357"
    //       +"cycle": "one-time"
    //       +"amount": 4
    //       +"currency": "NGN"
    //       +"chargedamount": 4
    //       +"appfee": 0.06
    //       +"merchantfee": 0
    //       +"merchantbearsfee": 1
    //       +"chargecode": "00"
    //       +"chargemessage": "Approved"
    //       +"authmodel": "noauth-saved-card"
    //       +"ip": "197.210.70.110"
    //       +"narration": "Airdge NG"
    //       +"status": "successful"
    //       +"vbvcode": "00"
    //       +"vbvmessage": "Approved"
    //       +"authurl": "N/A"
    //       +"acctcode": null
    //       +"acctmessage": null
    //       +"paymenttype": "card"
    //       +"paymentid": "6490"
    //       +"fraudstatus": "ok"
    //       +"chargetype": "normal"
    //       +"createdday": 1
    //       +"createddayname": "MONDAY"
    //       +"createdweek": 9
    //       +"createdmonth": 2
    //       +"createdmonthname": "MARCH"
    //       +"createdquarter": 1
    //       +"createdyear": 2021
    //       +"createdyearisleap": false
    //       +"createddayispublicholiday": 0
    //       +"createdhour": 15
    //       +"createdminute": 11
    //       +"createdpmam": "pm"
    //       +"created": "2021-03-01T15:11:28.000Z"
    //       +"customerid": 690723
    //       +"custphone": "8134649622"
    //       +"custnetworkprovider": "UNKNOWN PROVIDER"
    //       +"custname": "Oluwole Adebiyi"
    //       +"custemail": "rasheed@gmail.com"
    //       +"custemailprovider": "GMAIL"
    //       +"custcreated": "2021-03-01T13:10:17.000Z"
    //       +"accountid": 694020
    //       +"acctbusinessname": "Airdge NG"
    //       +"acctcontactperson": "Aniebiet Aaron"
    //       +"acctcountry": "NG"
    //       +"acctbearsfeeattransactiontime": 1
    //       +"acctparent": 2410
    //       +"acctvpcmerchant": "N/A"
    //       +"acctalias": null
    //       +"acctisliveapproved": 0
    //       +"orderref": "URF_E8EFBAB787FE8D8BFD_1488943"
    //       +"paymentplan": 362
    //       +"paymentpage": null
    //       +"raveref": null
    //       +"amountsettledforthistransaction": 3.94
    //       +"card": {#1436 ▼
    //         +"expirymonth": "09"
    //         +"expiryyear": "22"
    //         +"cardBIN": "553188"
    //         +"last4digits": "2950"
    //         +"brand": " CREDIT"
    //         +"issuing_country": "NIGERIA NG"
    //         +"card_tokens": array:1 [▶]
    //         +"type": "MASTERCARD"
    //         +"life_time_token": "flw-t1nf-6e9a69eaca99edabee97efac689bec6d-k3n"
    //       }
    //       +"meta": array:1 [▼
    //         0 => {#1427 ▼
    //           +"id": 200525997
    //           +"metaname": "__CheckoutInitAddress"
    //           +"metavalue": "http://lnaid.air/donations/paye"
    //           +"createdAt": "2021-03-01T15:11:29.000Z"
    //           +"updatedAt": "2021-03-01T15:11:29.000Z"
    //           +"deletedAt": null
    //           +"getpaidTransactionId": 1938496
    //         }
    //       ]
    //     }
    //   }

    // dd($data);
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Comfirm that the transaction is successful
        // Confirm that the chargecode is 00 or 0
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (includeing parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

  }
}
