<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/stations/{stationID}', function ($stationID) {
    // $station = Station::where('id', $stationID)->findOrFail();
    
    // currently the API doesn't work - keep getting 401'd
    $apiURL = env('admirality_api_url', false);

    $apiKey =  env('admirality_api_key', false);

    if (!$apiURL || !$apiKey)
    {
        throw new Exception('Unable to initialise external API Client: invalid credentials');
    }

    // clean the param first
    $apiURL .= "/{$stationID}";

    $client = new GuzzleHttp\Client();

    $headers = ['Ocp-Apim-Subscription-Key' => $apiKey];
    
    $res = $client->request('GET', $apiURL, $headers);

    echo $res->getStatusCode();
    // "200"
    echo $res->getHeader('content-type')[0];
    // 'application/json; charset=utf8'
    echo $res->getBody();
});