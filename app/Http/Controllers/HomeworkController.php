<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;

class HomeworkController extends Controller
{
    public function index() {
        $categories = Category::all();
        $products = Product::all();
        $blogs = Blog::all();
        //dd($banners);
        return view('products.index', compact('categories', 'products', 'blogs'));
    }

}
