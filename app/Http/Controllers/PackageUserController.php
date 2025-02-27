<?php

namespace App\Http\Controllers;

use App\Models\PackageUser;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon; // ✅ استيراد Carbon

class PackageUserController extends Controller
{
    public function create()
    {
        $users = User::all();
        $packages = Package::all();
        return view('package_users.create', compact('users', 'packages'));
    }

    public function index()
    {
        $package_users = PackageUser::with('package', 'user')->get();
        return view('package_users.index', compact('package_users'));
    }

    















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
        'expired_at' => $toAt, // الآن يُحسب تلقائيًا
    ]);

    return redirect()->route('package_users.index')->with('success', 'Package User updated successfully.');
}

    public function destroy(PackageUser $packageUser)
    {
        $packageUser->delete();
        return redirect()->route('package_users.index')->with('success', 'Subscription deleted successfully');
    }
}
