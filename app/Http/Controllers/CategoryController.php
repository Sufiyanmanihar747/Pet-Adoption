<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('this is categroy');
        $categories = Category::all();
        return view('admin.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->only(['name', 'image','description']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalName = $image->getClientOriginalName();
            $uniqueName = uniqid() . '_' . time() . '.' . $originalName;
            $image->storeAs('public/images', $uniqueName);
        }
        $data['image'] = $uniqueName;
        // dd($data);
        Category::create($data);
        return redirect('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $categories = Category::all();
        // return view('layouts.category',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category_create', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $currentImages = $category->image;
        $data = request()->only(['name', 'image','description']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalName = $image->getClientOriginalName();
            $uniqueName = uniqid() . '_' . time() . '.' . $originalName;
            $image->storeAs('public/images', $uniqueName);
            $path = public_path('storage/images/' . $currentImages);
            if (File::exists($path)) {
                File::delete($path);
            }
            $data['image'] = $uniqueName;
        } else {
            $data['image'] = $currentImages;
        }
        $category->update($data);
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        if ($category->image) {
            $path = public_path('storage/images/' . $category->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $category->delete();
        } else {
            Category::destroy($id);
        }
        return redirect('category');
    }
}
