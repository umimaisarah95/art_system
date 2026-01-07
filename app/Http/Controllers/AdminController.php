<?php

namespace App\Http\Controllers;

use App\Models\artclass;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artclasses = artclass::all();
        return view('admin.index', compact('artclasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'image_path' => 'required|string',
            'class_name' => 'required|string',
            'description' => 'required|string',
            'mode' => 'required|in:Online,Physical',
            'link' => 'nullable|string',
            'location' => 'nullable|string',
            'duration' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'price' => 'required|numeric',
        ]);

        $imagePath = $request->input('image_path')->store('artclass_images', 'public');
        artclass::create($data);
        return redirect()->route('admin.index')->with('success', 'Art class created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(artclass $artclass)
    {
        return view('admin.edit', compact('artclass'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artclass $artclass)
    {
        $request->validate([
            'image_path' => 'required|string',
            'class_name' => 'required|string',
            'description' => 'required|string',
            'mode' => 'required|in:Online,Physical',
            'link' => 'nullable|string',
            'location' => 'nullable|string',
            'duration' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('artclass_images', 'public');
        } else {
            $imagePath = $artclass->image_path;
        }

        $artclass->update([
            'image_path' => $imagePath,
            'class_name' => $request->input('class_name'),
            'description' => $request->input('description'),
            'mode' => $request->input('mode'),
            'link' => $request->input('link'),
            'location' => $request->input('location'),
            'duration' => $request->input('duration'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('admin.index')->with('success', 'Art class updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(artclass $artclass)
    {
        $artclass->delete();
        return redirect()->route('admin.index')->with('success', 'Art class deleted successfully.');
    }
}
