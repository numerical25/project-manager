<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use PHPUnit\Exception;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
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
    public function store(StoreRoleRequest $request)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        try {

        }catch (Exception $exception) {
            return $this->failureResponse('There was a issue saving a new urgency value');
        }
    }
}
