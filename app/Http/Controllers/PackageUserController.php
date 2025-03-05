<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package_users = PackageUser::with('package', 'user')->get();

        return view('package_users.index', compact('package_users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $packages = Package::all();

        return view('package_users.create', compact('users', 'packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'from_at' => 'required|date',
        ]);

        $package = Package::findOrFail($request->package_id);
        $fromAt = Carbon::parse($request->from_at);
        $toAt = $fromAt->copy()->addDays($package->duration);

        PackageUser::create([
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'from_at' => $fromAt,
            'to_at' => $toAt,
            'expired_at' => $toAt,
        ]);

        return redirect()->route('package_users.index')->with('success', 'Subscription created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PackageUser $packageUser)
    {
        return view('package_users.show', compact('packageUser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageUser $packageUser)
    {
        $users = User::all();

        $packages = Package::all();

        return view('package_users.edit', compact('packageUser', 'users', 'packages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageUser $packageUser)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:packages,id',
            'from_at' => 'required|date',
        ]);

        $package = Package::findOrFail($request->package_id);
        $fromAt = Carbon::parse($request->from_at);
        $toAt = $fromAt->copy()->addDays($package->duration);

        $packageUser->update([
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'from_at' => $fromAt,
            'to_at' => $toAt,
            'expired_at' => $toAt,
        ]);

        return redirect()->route('package_users.index')->with('success', 'Subscription updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageUser $packageUser)
    {
        $packageUser->delete();

        return redirect()->route('package_users.index')->with('success', 'Subscription deleted successfully.');
    }
}
