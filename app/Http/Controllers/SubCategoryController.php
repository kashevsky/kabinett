<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\BreadCrump;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index($categoryId, $subCategoryId)
    {
        $category = Category::find($categoryId);
        $sub_category = SubCategory::find($subCategoryId);
        $products = $sub_category->products;
        $bread_crumb = new BreadCrump($category->id, $category->title);
        $bread_crumbs = [$bread_crumb];
        return view('sub_category.show', compact('category','sub_category','bread_crumbs','products'));
    }
    public function show()
    {
        dd('11');
    }
}
