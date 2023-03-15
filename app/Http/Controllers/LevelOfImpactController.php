<?php

namespace App\Http\Controllers;

use App\Http\Response\DefaultReponse;
use App\Models\LevelOfImpact;
use PHPUnit\Exception;

class LevelOfImpactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = LevelOfImpact::where([])->get();
            return $this->successResponse($data, 'Level of impact data retrieved');
        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue retrieving the data');
        }
    }
}
