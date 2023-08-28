<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::get();
        return view('index', compact('categories'));
    }

    public function search(Request $request)
    {
        $params = $request->all();
        $search = $params['input'];
        if($search == ''){
            exit;
        }


        // $products = Product::where(function($query) use ($search){
        //     $query->where('title','like',"%$search%");
        // })
        // ->orWhereHas('category', function($query) use ($search){
        //     $query->where('title','like',"%$search%");
        // })
        $products = Product::where('title', 'like', "%$search%")->get();
        if(is_null($products)){
            $products = null;
        }

        return response()->json($products);
    }
}
