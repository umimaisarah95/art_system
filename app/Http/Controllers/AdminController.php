<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\ArtClass;
use App\Models\User;
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
        $artclasses = ArtClass::all();
        return view('admin.index', compact('artclasses'));
    }

    public function dashboard()
    {
         return view('admin.dashboard');
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
        'image_path' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'class_name' => 'required|string',
        'description' => 'required|string',
        'art_type' => 'required|in:Batik,Anyaman,Calligraphy,Ukiran Kayu,Wau Bulan',
        'mode' => 'required|in:Online,Physical',
        'link' => 'nullable|string',
        'location' => 'nullable|string',
        'duration' => 'required|integer',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'price' => 'required|numeric',
    ]);

    $data['image_path'] = $request
        ->file('image_path')
        ->store('artclass_images', 'public');

    ArtClass::create($data);

    return redirect()
        ->route('admin.index')
        ->with('success', 'Art class created successfully.');
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
    public function edit(ArtClass $artclass)
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
    public function update(Request $request, ArtClass $artclass)
{
    $data = $request->validate([
        'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'class_name' => 'required|string',
        'description' => 'required|string',
        'art_type' => 'required|in:Batik,Anyaman,Calligraphy,Ukiran Kayu,Wau Bulan',
        'mode' => 'required|in:Online,Physical',
        'link' => 'nullable|string',
        'location' => 'nullable|string',
        'duration' => 'required|integer',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'price' => 'required|numeric',
    ]);

    // If new image uploaded
    if ($request->hasFile('image_path')) {
        $data['image_path'] = $request
            ->file('image_path')
            ->store('artclass_images', 'public');
    }

    $artclass->update($data);

    return redirect()
        ->route('admin.index')
        ->with('success', 'Art class updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtClass $artclass)
    {
        $artclass->delete();
        return redirect()->route('admin.index')->with('success', '1 Art class deleted successfully.');
    }

public function userList()
{
    $users = User::with('classes')->get();

    return view('admin.manage-user', compact('users'));
}

}
