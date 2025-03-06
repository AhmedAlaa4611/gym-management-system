<?php

namespace App\Http\Controllers\Api;

use App\Classes\WeekDays;
use App\Http\Controllers\Controller;
use App\Models\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periods = Period::with('user')->get();

        return response()->json([
            'success' => true,
            'data' => $periods,
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'coach_name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'day' => ['required', Rule::in(WeekDays::get())],
            'user_id' => 'required|integer|min:1|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $period = Period::create($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'Class created successfully!',
            'data' => $period,
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Period $period)
    {
        return response()->json([
            'success' => true,
            'data' => $period,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Period $period)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string|max:65535',
            'coach_name' => 'sometimes|required|string|max:255',
            'start_time' => 'sometimes|required|date_format:H:i',
            'end_time' => 'sometimes|required|date_format:H:i|after:start_time',
            'day' => ['sometimes', 'required', Rule::in(WeekDays::get())],
            'user_id' => 'sometimes|required|integer|min:1|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = array_merge($period->toArray(), $validator->validated());

        $period->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Class updated successfully!',
            'data' => $period->refresh(),
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period)
    {
        $period->delete();

        return response()->json([
            'success' => true,
            'message' => 'Class deleted successfully!',
        ], Response::HTTP_NO_CONTENT);
    }
}
