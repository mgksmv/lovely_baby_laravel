<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index() 
    {
        $categories = Category::where('is_published', true)->paginate(10);

        return view('catalog', [
            'categories' => $categories,
        ]);
    }

    public function show_category($slug)
    {
        $category = Category::where(['is_published' => true, 'slug' => $slug])->first();
        $products = Product::where(['is_published' => true, 'category_id' => $category->id])->paginate(12);

        return view('category_detail', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function show_product($slug)
    {
        $product = Product::where(['is_published' => true, 'slug' => $slug])->first();

        return view('product_detail', [
            'product' => $product,
        ]);
    }
}
