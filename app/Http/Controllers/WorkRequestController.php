<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkRequestRequest;
use App\Http\Response\DefaultReponse;
use App\Models\WorkRequest;
use App\Models\WorkType;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;

class WorkRequestController extends Controller
{

    public function index()
    {
        try {
            $data = WorkRequest::with('WorkType')->latest('updated_at')->get();
        } catch (\Exception $e) {
            return $this->failureResponse(null, $e->getMessage());
        }
        return $this->successResponse($data,'Results Found');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            if(!$id) {
                throw new \Exception('There was no ID provided');
            }
            $data = WorkRequest::with('WorkType')->where('id', $id)->first();
            if(!$data) {
                throw new \Exception('There was no work request with the provided ID');
            }
            return $this->successResponse($data,'Work Order Request Success');
        } catch (\Exception $e) {
            return $this->failureResponse(null, $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function filter(Request $request)
    {
        try {
            if(!$request) {
                throw new \Exception('There was no ID provided');
            }
            $data = WorkRequest::with('WorkType');
            $filter = $request->all();
            foreach($filter['request_types'] as $requestType) {
                if($requestType['is_checked']) {
                    $data = $data->orWhere(['request_type_id' => $requestType['id']]);
                }
            }
            foreach($filter['benefit_types'] as $requestType) {
                if($requestType['is_checked']) {
                    $data = $data->orWhere(['benefit_type_id' => $requestType['id']]);
                }
            }
            foreach($filter['risk_levels'] as $requestType) {
                if($requestType['is_checked']) {
                    $data = $data->orWhere(['risk_level_id' => $requestType['id']]);
                }
            }
            $data = $data->get();
            return $this->successResponse($data,'Work Order Request Success');
            if(!$data) {
                throw new \Exception('There was no work request with the provided ID');
            }
            return $this->successResponse($data,'Work Order Request Success');
        } catch (\Exception $e) {
            return $this->failureResponse(null, $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show_edit($id)
    {
        try {
            if(!$id) {
                throw new \Exception('There was no ID provided');
            }
            $data = WorkRequest::with('benefit_types')->where('id', $id)->first();
            if(!$data) {
                throw new \Exception('There was no work request with the provided ID');
            }
            return $this->successResponse($data,'Work Order Request Success');
        } catch (\Exception $e) {
            return $this->failureResponse(null, $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkRequestRequest $request)
    {
        $abilities = config('abilities');
        try {
            if(!$request->validated()) {
                throw new \Exception('Please provide all required fields');
            }
            $workrequest = WorkRequest::updateOrCreate(['id' => $request->input('id')],
                $request->except('benefit_types'));
            $workrequest->benefit_types()->sync($request->input('benefit_types'));
            $workrequest = WorkRequest::with('benefit_types')->where(['id'=>$workrequest->id])->first();
            return $this->successResponse($workrequest,'Work Order Request Success');
        } catch(\Exception $e) {
            return $this->failureResponse(null, $e->getMessage());
        }
        return $this->successResponse(null ,'No Data Found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $response = new DefaultReponse();
        try {
            if(!$id) {
                throw new \Exception('Please provide a work request to delete');
            }
            $response->message = 'Work request successfully saved';
            return response()->json($response);
        } catch(\Exception $e) {
            $response->success = false;
            $response->message = $e->getMessage();
            return response()->json($response);
        }
        return response()->json(new DefaultReponse(null, 'No Data Found', false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
