<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class UserController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function store(Request $data)
    {
        $secureData = $data->all();
        $secureData['password'] = Hash::make($data->password);
        $user = User::create($secureData);
        if(Auth::attempt(['email' => $data->email,  'password' => $data->password])) {
            $token = $user->createToken('My Token')->plainTextToken;
            $user->api_token = $token;
            $user->save();
            return $this->successResponse(['token' => $token],'User Created Successfully');
        }
        return $this->failureResponse('Issue With Authentication');
    }

    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function refresh_token(Request $request)
    {
        $token = Str::random(60);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return $this->successResponse(['token' => $token],'User Created Successfully');
    }

    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $token = Str::random(60);
                $request->user()->forceFill([
                    'api_token' => hash('sha256', $token),
                ])->save();
                // Authentication passed...
                return $this->successResponse(['token' => $token],'Login Success');
            }
            return $this->failureResponse('Incorrect email or password', 401);
        }catch (Exception $e) {
            return $this->failureResponse('There was a issue logging in', 401);
        }
    }
}
