<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;


class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dump('this is owner');
        $owner = FacadesAuth::user();
        $pets = $owner->pets;
        return view('owner.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = FacadesAuth::user();
        $categories = Category::pluck('name', 'id')->toArray();
        return view('owner.create', compact('categories', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addressId = $request->input('address_id');

        if ($addressId === 'new') {
            $address = Address::create([
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'user_id' => FacadesAuth::id(),
            ]);
            $addressId = $address->id;
        }

        $data = $request->only([
            'name',
            'breed',
            'age',
            'description',
            'gender',
            'image',
            'status',
            'user_id',
            'species',
        ]);
        // dd(FacadesAuth::id());
        $data['user_id'] = FacadesAuth::id();
        if ($request->hasFile('image')) {
            $imageArray = $request->file('image');
            $final = [];
            foreach ($imageArray as  $image) {
                $originalName = $image->getClientOriginalName();
                $uniqueName = uniqid() . '_' . time() . '.' . $originalName;
                $image->storeAs('public/images', $uniqueName);
                $final[] = $uniqueName;
            }
            $imgstring = implode(',', $final);
            $data['image'] = $imgstring;
        }
        $data['address_id'] = $addressId;
        // dd($data);
        Pet::create($data);
        return redirect('owner');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = Pet::find($id);
        $user = FacadesAuth::user();
        $categories = Category::pluck('name', 'id')->toArray();
        return view('owner.create', compact('pet', 'categories', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pet = Pet::find($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'breed' => 'required|string',
            'age' => 'required|integer',
            'description' => 'required|string',
            'gender' => 'required|string',
            'status' => 'required|string',
            'species' => 'required|string',
            'address_id' => 'nullable|exists:addresses,id',
            'street' => 'nullable|required_if:address_id,new|string',
            'city' => 'nullable|required_if:address_id,new|string',
            'state' => 'nullable|required_if:address_id,new|string',
            'image.*' => 'nullable|image',
        ]);

        $data = $request->only([
            'name',
            'breed',
            'age',
            'description',
            'gender',
            'image',
            'status',
            'user_id',
            'species',
        ]);
        // dd($data);
        $data['user_id'] = FacadesAuth::id();

        $addressId = $request->input('address_id');
        if ($addressId === 'new') {
            // Create new address if "new" is selected
            $address = Address::create([
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
            ]);
            $addressId = $address->id;
        }
        $data['address_id'] = $addressId;

        if ($request->hasFile('image')) {

            $oldImages = explode(',', $pet->image);
            foreach ($oldImages as $filename) {
                $path = public_path('storage/images/' . $filename);
                if (File::exists($path)) {
                    File::delete($path);
                }
            }

            $imageArray = $request->file('image');
            $final = [];
            foreach ($imageArray as  $image) {
                $originalName = $image->getClientOriginalName();
                $uniqueName = uniqid() . '_' . time() . '.' . $originalName;
                $image->storeAs('public/images', $uniqueName);
                $final[] = $uniqueName;
            }
            $imgstring = implode(',', $final);
            $data['image'] = $imgstring;
        } else {
            $data['image'] = $pet->image;
        }
        // dd($data);
        $pet->update($data);
        return redirect('pets')->with('success', 'Pet updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
