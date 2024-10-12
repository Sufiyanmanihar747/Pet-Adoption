<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dump("this si admin controller");
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admin_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => 'required|string|min:8',
            'role' => 'required|string',
            'phone' => ['required', 'digits:10'],

        ]);

        $data = $request->only(['name', 'email', 'password', 'role','phone']);
        User::create($data);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.admin_create', compact('user'));
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
        User::destroy($id);
        return redirect('admin');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function request(){
        $adoptionRequests = Adoption::all();
        return view('admin.adoptions',compact('adoptionRequests'));
    }
    public function accept($id){
        $adoption = Adoption::findOrFail($id);
        $adoption->status = 'approved';
        $adoption->save();
        $pet = Pet::find($adoption->pet_id);
        $pet->status = 'adopted';
        $pet->save();
        return redirect('request');
    }
    public function  reject($id){
        Adoption::destroy($id);
        return redirect()->back();
    }
}
