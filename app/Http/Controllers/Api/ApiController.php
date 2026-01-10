<?php

namespace App\Http\Controllers\Api;

use App\Http\Models\ArtClass;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ArtClass::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return ArtClass::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ArtClass::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
