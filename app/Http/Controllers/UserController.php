<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\ArtClass;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $totalClasses = ArtClass::count();
         $myClassCount = Auth::user()->classes()->count();

    return view('user.index', compact('totalClasses', 'myClassCount'));
    }
    public function dashboard()
    {
        $artclasses = ArtClass::all();
        return view('user.dashboard', compact('artclasses'));
    }

    public function profile()
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    
    //TO ENSURE THE DETAILS OF CERTAIN CLASS//
    public function details($id)
    {
        $artclass = ArtClass::findOrFail($id);

         $isRegistered = false;

        if (Auth::check()) {
            $isRegistered = Auth::user()
            ->classes()
            ->where('artclasses.class_id', $id)
            ->exists();
            }

         return view('user.class-details', compact('artclass', 'isRegistered'));
    }

//when user register to certain class, it will update the pivot table!//
    public function registerClass($id)
    {
        // check if user is authenticated
        if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please login first.');
        }
        
        $user = Auth::user();

        // prevent duplicate registration
        if (!$user->classes()->where('artclasses.class_id', $id)->exists()) {
            $user->classes()->attach($id);
        }

        // Simulated payment success
        return redirect()->route('user.dashboard')
            ->with('success', 'Payment successful. You are registered for the class!');
    }

    public function myClasses()
    {
        if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please login first.');
        }
        
        $user = Auth::user();

        // get classes registered by this user
        $classes = $user->classes;

        return view('user.myclasses', compact('classes'));
    }















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
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
