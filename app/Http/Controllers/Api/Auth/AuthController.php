<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return response()->json([
            'message' => 'User logged out successfully',
        ], 200);
    }
}
