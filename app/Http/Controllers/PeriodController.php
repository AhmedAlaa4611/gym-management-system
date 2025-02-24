<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\User;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
        $periods = Period::with('user')->get();

        return view('period.period', compact('periods'));
    }

    public function create()
    {
        $users = User::all();

        return view('period.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'coach_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'day' => 'required|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
            'user_id' => 'required|exists:users,id',
        ]);

        Period::create($request->only([
            'name', 'description', 'coach_name',
            'start_time', 'end_time', 'day', 'user_id',
        ]));

        return redirect()->route('period.period')->with('success', 'Class created successfully!');
    }

    public function show(string $id)
    {
        $period = Period::with('user')->findOrFail($id);

        return view('period.show', compact('period'));
    }

    public function edit(string $id)
    {
        $period = Period::findOrFail($id);
        $users = User::all();

        return view('period.update', compact('period', 'users'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'coach_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'day' => 'required|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
            'user_id' => 'required|exists:users,id',
        ]);

        $period = Period::findOrFail($id);

        $period->update($request->only([
            'name', 'description', 'coach_name',
            'start_time', 'end_time', 'day', 'user_id',
        ]));

        return redirect()->route('period.period')->with('success', 'Class updated successfully!');
    }

    public function destroy(string $id)
    {
        $period = Period::findOrFail($id);
        $period->delete();

        return redirect()->route('period.period')->with('success', 'Class deleted successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $periods = Period::with('user')
            ->where('name', 'like', "%{$query}%")
            ->get();

        if ($periods->isEmpty()) {
            return redirect()->route('period.period')->with('message', 'No results found.');
        }

        return view('period.period', compact('periods'));
    }
}
