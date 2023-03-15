<?php

namespace App\Http\Controllers;

use App\Http\Response\DefaultReponse;
use App\Models\Urgency;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class UrgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Urgency::all();
        return $this->successResponse($data, 'Urgency Successfully Retrieved!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }
}
