<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\User;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periods = Period::with('user')->get();

        return view('period.index', compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();

        return view('period.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'coach_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'day' => 'required|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',
            'user_id' => 'required|integer|min:1|exists:users,id',
        ]);

        Period::create($data);

        return to_route('period.index')->with('success', 'Class created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $period = Period::with('user')->findOrFail($id);

        return view('period.show', compact('period'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $period = Period::findOrFail($id);

        $users = User::all();

        return view('period.update', compact('period', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'coach_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'day' => 'required|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',
            'user_id' => 'required|integer|min:1|exists:users,id',
        ]);

        $period = Period::findOrFail($id);

        $period->update($data);

        return to_route('period.index')->with('success', 'Class updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $period = Period::findOrFail($id);

        $period->delete();

        return to_route('period.index')->with('success', 'Class deleted successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $periods = Period::with('user')
            ->where('name', 'like', "%{$query}%")
            ->get();

        if ($periods->isEmpty()) {
            return to_route('period.index')->with('message', 'No results found.');
        }

        return view('period.index', compact('periods'));
    }
}
