<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\BreadCrump;
use App\Models\SubProduct;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubProductController extends Controller
{

    public function show($categoryId, $subCategoryId, $productId, $subProductId)
    {
        $category = Category::find($categoryId);
        $sub_category = SubCategory::find($subCategoryId);
        $products = $sub_category->products;
        $sub_product = SubProduct::find($subProductId);
        $bread_crumb = new BreadCrump($category->id, $category->title);
        $bread_crumbs = [$bread_crumb];
        return view('sub_product.index', compact('category','sub_category','bread_crumbs','products','sub_product'));
    }
}
