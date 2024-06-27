<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('layout_admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('layout_admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image',
            'price' => 'required|numeric',
            'description' => 'required',
            'color' => 'required',
            'quantity' => 'required|integer',
        ]);

        $photoPath = $request->file('photo')->store('product_photos', 'public');

        Product::create([
            'name' => $request->name,
            'photo' => $photoPath,
            'price' => $request->price,
            'description' => $request->description,
            'color' => $request->color,
            'quantity' => $request->quantity,
            'seller_id' => auth()->id(),
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function show(Product $product)
    {
        return view('layout_admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('layout_admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'image',
            'price' => 'required|numeric',
            'description' => 'required',
            'color' => 'required',
            'quantity' => 'required|integer',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('product_photos', 'public');
            $product->photo = $photoPath;
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'color' => $request->color,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil diupdate');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus');
    }
}
