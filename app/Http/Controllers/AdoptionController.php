<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'terms' => 'accepted',
            'pet_id' =>  'required',
        ]);
        $data = $request->only(['pet_id']);
        $data['user_id'] = Auth::id();
        Adoption::create($data);
        return redirect()->back()->with('success', 'We will inform you when your request get accepted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet =  Pet::find($id);
        $pets = Pet::where('species', $pet->species)->where('id', '!=', $id)->get();
        return  view('adopt.show',compact('pet','pets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
