<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('mainpage.index', compact('products'));
    }
}
