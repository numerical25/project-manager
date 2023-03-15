<?php

namespace App\Http\Controllers;

use App\Http\Response\DefaultReponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function successResponse($data = null, $message, $responseCode = 200) {
        $response = new DefaultReponse($data, $message, true, $responseCode);
        return response()->json($response, $responseCode);
    }

    public function failureResponse($message, $responseCode = 500) {
        $response = new DefaultReponse(null, $message, false, $responseCode);
        return response()->json($response,$responseCode);
    }
}
