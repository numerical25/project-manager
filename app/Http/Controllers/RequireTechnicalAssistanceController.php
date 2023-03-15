<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequireTechnicalAssistanceRequest;
use App\Http\Requests\UpdateRequireTechnicalAssistanceRequest;
use App\Models\RequireTechnicalAssistance;
use App\Models\WorkType;
use PHPUnit\Exception;

class RequireTechnicalAssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $workType = RequireTechnicalAssistance::all();
            return $this->successResponse($workType, 'Retrieved data.');
        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue retrieving data');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequireTechnicalAssistanceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RequireTechnicalAssistance $requireTechnicalAssistance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequireTechnicalAssistance $requireTechnicalAssistance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequireTechnicalAssistanceRequest $request, RequireTechnicalAssistance $requireTechnicalAssistance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequireTechnicalAssistance $requireTechnicalAssistance)
    {
        //
    }
}
