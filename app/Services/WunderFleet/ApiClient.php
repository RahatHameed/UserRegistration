<?php

namespace App\Services\WunderFleet;

use Illuminate\Support\Facades\Http;

class ApiClient 
{

   /**
    * @param string $url
    * @param array $params
    * @return array
    *
    */

   public function post(string $url, array $params): array {

       $response = Http::post($url,$params);
       return  $response->json();
   }

}