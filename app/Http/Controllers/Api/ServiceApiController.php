<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceApiController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return response()->json($services);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:65535',
            'price' => 'required|numeric|min:0.01',
            'duration' => 'required|integer|min:1',
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('services', 'public');
        }

        $service = Service::create($validatedData);

        return response()->json(['message' => 'Service created successfully', 'data' => $service], 201);
    }

    /**
     * عرض خدمة معينة.
     */
    public function show(Service $service)
    {
        return response()->json($service);
    }

    /**
     * تحديث بيانات الخدمة.
     */
    public function update(Request $request, Service $service)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:65535',
            'price' => 'sometimes|numeric|min:0.01',
            'duration' => 'sometimes|integer|min:1',
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validatedData);

        return response()->json(['message' => 'Service updated successfully', 'data' => $service]);
    }

    /**
     * حذف خدمة.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return response()->json(['message' => 'Service deleted successfully']);
    }
}
