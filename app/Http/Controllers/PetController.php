<?php

namespace App\Http\Controllers;

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
        $categories = Category::pluck('name', 'id')->toArray();
        return view('pet.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
                $image->storeAs('public/image', $uniqueName);
                $final[] = $uniqueName;
            }
            $imgstring = implode(',', $final);
            $data['image'] = $imgstring;
        }
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = Pet::find($id);
        $categories = Category::pluck('name', 'id')->toArray();
        return view('pet.create', compact('pet', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pet = Pet::find($id);
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
        $pet->update($data);
        return redirect('pets');
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
