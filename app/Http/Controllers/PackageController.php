<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
   

    public function create()
    {
        return view('packages.create');
    }

    



    public function store(Request $request)
{
    if (auth()->user()->type !== 'admin') {
        return redirect()->back()->with('error', 'Unauthorized action!');
    }

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'duration' => 'required|integer',
    ]);

    Package::create($validated);

    return redirect()->route('packages.index')->with('success', 'Package created successfully.');
}


    public function edit(Package $package)
    {
        return view('packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $package->update($request->all());

        return redirect()->route('packages.index')->with('success', 'Package updated successfully');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package deleted successfully');
    }
    public function index()
        {
            $packages = Package::all(); // جلب جميع الـ Packages
            return view('packages.index', [
                'packages' => $packages,
                'tableName' => 'packages' // تمرير اسم الجدول
            ]);
        }


        public function show(Package $package)
        {
            return view('packages.show', compact('package'));
        }
        

}
