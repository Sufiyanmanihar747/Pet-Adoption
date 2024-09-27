<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Pet;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\File;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("this is per");
        $pets = Pet::all();
        // $categories = Category::all();

        return view('pet.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = FacadesAuth::user();
        $categories = Category::pluck('name', 'id')->toArray();
        return view('pet.create', compact('categories', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'description' => 'required|string',
        //     'address_id' => 'required|string',
        //     'city' => 'required_if:address_id,new|string',
        //     'state' => 'required_if:address_id,new|string',
        //     'address' => 'required_if:address_id,new|string',
        // ]);
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
        dump('this is end');
        return redirect('pets');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet =  Pet::find($id);
        return view('pet.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = Pet::find($id);
        $user = FacadesAuth::user();
        $categories = Category::pluck('name', 'id')->toArray();
        return view('pet.create', compact('pet', 'categories', 'user'));
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
        // dd("this is destroy");
        $pet = Pet::find($id);

        if ($pet->image) {
            $path = public_path('storage/images/' . $pet->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $pet->delete();
        } else {
            Pet::destroy($id);
        }
        return redirect('pets');
    }
}
