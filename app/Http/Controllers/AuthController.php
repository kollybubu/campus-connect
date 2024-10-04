<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        try {
            if(!Auth::attempt($request->only(['email', 'password']))) {
                return $this->sendError('Your Email & Password does not match!', null, 401);
            }
    
            $user = $this->authService->login($request->email);
            $result = new UserResource($user);
    
            return $this->sendResponse($result, 'User logged in successfully!', 200);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 500);
        }
    }
}
