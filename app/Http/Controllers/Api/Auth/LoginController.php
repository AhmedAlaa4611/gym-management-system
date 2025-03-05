<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json([
            'message' => 'Login form endpoint',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 400);
        }

        if (Auth::attempt($validator, $request->has('remember'))) {
            return response()->json([
                'message' => 'Login successful',
                'user' => Auth::user(),
            ], 200);
        }

        return response()->json([   // 401 status for invalid credentials.
            'message' => 'Invalid credentials',
            'errors' => [
                'email' => 'These credentials do not match our records.',
                'password' => 'These credentials do not match our records.',
            ],
        ], 401);
    }
}
