<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PackageUser;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PackageUserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package_users = PackageUser::all();

        return response()->json($package_users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'from_at' => 'required|date',
        ]);

        $validated = $validator->validated();
        $package = Package::findOrFail($validated['package_id']);
        $fromAt = Carbon::parse($validated['from_at']);
        $toAt = $fromAt->copy()->addDays($package->duration);

        PackageUser::create([
            'user_id' => $validated['user_id'],
            'package_id' => $validated['package_id'],
            'from_at' => $fromAt,
            'to_at' => $toAt,
            'expired_at' => $toAt,
        ]);

        return response()->json([
            'message' => 'Package assigned successfully',
            'data' => $validated
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $packageUser = PackageUser::find($id);

        if (!$packageUser) {
            return response()->json(['error' => 'PackageUser not found'], 404);
        }

        return response()->json($packageUser);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $packageUser = PackageUser::find($id);

        if (!$packageUser) {
            return response()->json(['error' => 'PackageUser not found'], 404);
        }

        $validator = Validator::make($request->all(),[
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'from_at' => 'required|date',
        ]);

        $validated = $validator->validated();
        $package = Package::findOrFail($validated['package_id']);
        $fromAt = Carbon::parse($validated['from_at']);
        $toAt = $fromAt->copy()->addDays($package->duration);

        $packageuser= PackageUser::find($id);
        $packageuser->update([
            'user_id' => $validated['user_id'],
            'package_id' => $validated['package_id'],
            'from_at' => $fromAt,
            'to_at' => $toAt,
            'expired_at' => $toAt,
        ]);

        return response()->json([
            'message' => 'PackageUser updated successfully',
            'data' => $packageuser
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $packageUser = PackageUser::find($id);

        if (!$packageUser) {
            return response()->json(['error' => 'PackageUser not found'], 404);
        }

        $packageUser->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}
