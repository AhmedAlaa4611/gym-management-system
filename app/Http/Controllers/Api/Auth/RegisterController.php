<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json([
            'message' => 'Register form endpoint',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255', 'confirmed'],
            'password_confirmation' => ['required', 'min:6', 'max:255'],
            'gender' => ['nullable', 'in:male,female'],
            'type' => ['required', 'in:store_owner,gym_owner,admin,customer'],
            'date_of_birth' => ['nullable', 'date'],
            'phone' => ['nullable', 'string', 'regex:/^(010|011|012|015)\d{8}$/'],
            'bio' => ['nullable', 'string', 'max:65535'],
            'image' => ['nullable', 'image', 'max:2048'],
            'location' => ['nullable', 'string', 'max:255'],
            'visa' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 400);
        }

        $data = $validator->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $user = User::create($data);

        Auth::login($user);

        return response()->json([   // 201 status for created successfully.
            'message' => 'User registered successfully',
            'user' => $user,
        ], 201);
    }
}
