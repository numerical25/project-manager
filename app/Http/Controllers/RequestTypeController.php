<?php

namespace App\Http\Controllers;

use App\Models\RequestType;
use PHPUnit\Exception;

class RequestTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = RequestType::where([])->get();
            return $this->successResponse($data, 'Data Retrieved');
        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue retrieving the data');
        }
    }
}
