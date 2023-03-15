<?php

namespace App\Http\Controllers;

use App\Models\BenefitType;
use PHPUnit\Exception;

class BenefitTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = BenefitType::where([])->get();
            return $this->successResponse($data, 'Benefit Type data retrieved');
        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue retrieving the data');
        }
    }
}
