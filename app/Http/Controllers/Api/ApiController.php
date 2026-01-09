<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ArtClass;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // GET
public function index()
{
    return response()->json([
        'status' => 'success',
        'data' => ArtClass::select(
            'class_id',
            'class_name',
            'art_type',
            'mode',
            'duration',
            'price'
        )->get()
    ]);
}


    // POST
    public function store(Request $request)
    {
        $data = $request->validate([
            'class_name' => 'required|string',
            'description' => 'required|string',
            'art_type' => 'required|string',
            'mode' => 'required|in:Online,Physical',
            'duration' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $class = ArtClass::create($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Art class created successfully',
            'data' => $class
        ], 201);
    }

    // GET by ID
    public function show($id)
    {
        return response()->json([
            'status' => 'success',
            'data' => ArtClass::findOrFail($id)
        ]);
    }

    // PUT
    public function update(Request $request, $id)
    {
        $artclass = ArtClass::findOrFail($id);

        $data = $request->validate([
            'class_name' => 'sometimes|string',
            'description' => 'sometimes|string',
            'art_type' => 'sometimes|string',
            'mode' => 'sometimes|in:Online,Physical',
            'duration' => 'sometimes|integer',
            'price' => 'sometimes|numeric',
        ]);

        $artclass->update($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Art class updated successfully',
            'data' => $artclass
        ]);
    }
}
