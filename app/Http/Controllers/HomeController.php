<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dump('this is home controller');
        $categories = Category::all();
        $pets = Pet::all();
        return view('welcome',compact('categories','pets'));
    }

    public function category($category)
    {
        dump($category);
        dd('this is category');
    }
}
