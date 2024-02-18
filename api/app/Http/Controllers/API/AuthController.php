<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function register(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|string|min:2|max:50',
            'lastName' => 'required|string|min:2|max:50',
            'email' => 'required|string|email:rfc,dns|max:100|unique:users',
            'password' => 'required|string|min:6|max:100',
        ]);

        $user = $this->user::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $token = auth()->login($user);

        return response()->json([
            'meta' => [
                'code' => 200,
                'status' => 'succès',
                'message' => 'Création effectuée avec succès',
            ],

            'data' => [
                'user' => $user,
                'access_token' => [
                    'token' => $token,
                    'type' => 'Bearer',
                    'expires_in' => auth()->factory()->getTTL() * 7200, 
                ],
            ],
        ]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $token = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if ($token)
        {
            return response()->json([
                'meta' => [
                'code' => 200,
                'status' => 'succès',
                'message' => 'Quote fetched successfully.',
            ],
            'data' => [
                'user' => auth()->user(),
                'access_token' => [
                    'token' => $token,
                    'type' => 'Bearer',
                    'expires_in' => auth()->factory()->getTTL() * 7200,
                ],
            ],
        ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'succès',
            'message' => 'Successfully logged out',
        ]);
    }
}
