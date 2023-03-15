<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkTypeRequest;
use App\Http\Requests\UpdateWorkTypeRequest;
use App\Http\Response\DefaultReponse;
use App\Models\WorkType;
use PHPUnit\Exception;

class WorkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $workType = WorkType::all();
            return $this->successResponse($workType, 'Retrieved Work Type data.');
        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue retrieving a new Work Type data');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkTypeRequest $request)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkType $workType)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkType $workType)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkTypeRequest $request, WorkType $workType)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkType $workType)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }
}
