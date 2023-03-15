<?php

namespace App\Http\Controllers;

use App\Http\Response\DefaultReponse;
use App\Models\LevelOfImpact;
use App\Models\RiskLevel;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class RiskLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = RiskLevel::where([])->get();
            return $this->successResponse($data, 'Data Retrieved');
        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue retrieving the data');
        }
    }
}
