<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\BreadCrump;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($categoryId, $subCategoryId, $productId)
    {
        $product = Product::find($productId);
        $category = Category::find($categoryId);
        $sub_category = SubCategory::find($subCategoryId);
        $sub_products = $product->subProducts;
        $category_bread_crumb = new BreadCrump($category->id, $category->title);
        $product_bread_crumb = new BreadCrump($product->id, $product->title);
        $bread_crumbs = [$category_bread_crumb, $product_bread_crumb];
        return view('product.show', compact('product','category','sub_category','bread_crumbs','sub_products'));
    }
}
