<?php

namespace App\Http\Controllers;

use App\Classes\WeekDays;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $users = User::all();

        return view('services.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer|min:1|exists:users,id',
            'type' => 'required|in:doc,coach',
            'day' => ['required', Rule::in(WeekDays::get())],
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

        $users = User::all();

        return view('services.edit', compact('service', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'user_id' => 'required|integer|min:1|exists:users,id',
            'type' => 'required|in:doc,coach',
            'day' => ['required', Rule::in(WeekDays::get())],
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
