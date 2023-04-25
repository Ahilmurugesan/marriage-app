<?php

namespace App\Http\Controllers\API;

use App\Exceptions\AuthException;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\AuthServices;
use Illuminate\Http\JsonResponse;
use Throwable;

class AuthController extends Controller
{
    /**
     * @param  AuthServices  $authServices
     */
    public function __construct(private AuthServices $authServices) {}

    /**
     * Login function for the user
     *
     * @param  LoginRequest  $request
     * @return JsonResponse
     * @throws AuthException
     * @throws Throwable
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $token = $this->authServices->handleLogin($request->only('email', 'password'));

        return response()->json([
            'access_token'  => $token,
            'token_type'    => 'Bearer',
        ]);
    }

    /**
     * Login function for the vendor
     *
     * @param  LoginRequest  $request
     * @return JsonResponse
     * @throws AuthException|Throwable
     */
    public function vendorLogin(LoginRequest $request): JsonResponse
    {
        $token = $this->authServices->handleLogin($request->only('email', 'password'), true);

        return response()->json([
            'access_token'  => $token,
            'token_type'    => 'Bearer',
        ]);
    }

    /**
     * Logout function for the user
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        $this->authServices->handleLogout();

        return response()->json([
            'status' => true,
            'message'  => 'User logged out successfully'
        ]);
    }
}
