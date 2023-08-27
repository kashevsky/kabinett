<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\BreadCrump;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        $category = $product->category;
        $category_bread_crumb = new BreadCrump($category->id, $category->title);
        $product_bread_crumb = new BreadCrump($product->id, $product->title);
        $bread_crumbs = [$category_bread_crumb, $product_bread_crumb];
        return view('product.show', compact('product','bread_crumbs'));
    }
}
