<?php

namespace App\Services\WunderFleet;

use Illuminate\Support\Facades\Cache;

class Service
{

    private $wunderFleetClient;

    /**
     * Service constructor.
     * @param ApiClient $wunderFleetClient
     */
    public function __construct(ApiClient $wunderFleetClient)
    {
        $this->wunderFleetClient = $wunderFleetClient;
    }    

    /**
     * @param array $params
     * @return array
     */    
    public function getPaymentDataId(array $params): array
    {

        $response = $this->wunderFleetClient->post(env('WUNDER_FLEET_URL'),$params);
        if($response['paymentDataId']){

            $paymentDataId = $response['paymentDataId'];
            $finalResponse = [
                'data' => $paymentDataId,
                'status' => 'success',
                'message' => 'PaymentDataId found returned by Wunderfleet Api is mentioned below.'
            ];

        }else{
            $finalResponse = [
                'data' => '',
                'status' => 'error',
                'message' => 'WundferFellet api did not work, try again later'
            ];
        }
        return $finalResponse;

    }  

}