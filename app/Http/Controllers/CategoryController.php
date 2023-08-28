<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\BreadCrump;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);
        $sub_categories = $category->subCategories;
        $bread_crumb = new BreadCrump($category->id, $category->title);
        $bread_crumbs = [$bread_crumb];
        return view('category.index', compact('category','sub_categories','bread_crumbs'));
    }
}
