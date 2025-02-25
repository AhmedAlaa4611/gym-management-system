<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer|min:1|exists:users,id',
            'type' => 'required|in:doc,coach',
            'day' => 'required|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
        ]);

        Service::create($data);

        return to_route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::findOrFail($id);

        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);

        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_id' => 'required|integer|min:1|exists:users,id',
            'type' => 'required|in:doc,coach',
            'day' => 'required|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
        ]);

        $service = Service::findOrFail($id);

        $service->update($data);

        return to_route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return to_route('services.index');
    }
}
