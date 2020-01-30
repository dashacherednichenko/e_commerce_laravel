<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
//        $goods = Product::where('category_id', $category->id)->get();
//        dd($category);
        return view('category', compact('category'));
    }

    public function product($code) {
        $product = Product::where('code', $code)->first();
//        dump($product);
        return view('product', compact('product'));
    }

    public function about() {
        return view('about');
    }

    public function payment() {
        return view('payment');
    }

    public function shipping() {
        return view('shipping');
    }

    public function callback() {
        return view('callback');
    }

    public function news() {
        return view('news');
    }
}
