<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\BreadCrump;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::find($id);
        $products = $category->products;
        $bread_crumb = new BreadCrump($category->id, $category->title);
        $bread_crumbs = [$bread_crumb];
        return view('category.show', compact('products','category','bread_crumbs'));
    }
}
