<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductPenjual;

class PenjualProductController extends Controller
{
    function index()
    {
        $productPenjual = ProductPenjual::all();
        return view('layout_penjual.products.index', compact('productPenjual'));
    }

    function create()
    {
        return view('layout_penjual.products.create');
    }

    function store(Request $request)
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

        ProductPenjual::create([
            'name' => $request->name,
            'photo' => $photoPath,
            'price' => $request->price,
            'description' => $request->description,
            'color' => $request->color,
            'quantity' => $request->quantity,
            'seller_id' => auth()->id(),
        ]);

        return redirect()->route('product_penjuals.index')->with('success', 'Produk berhasil ditambahkan');
    }

    function show(ProductPenjual $productPenjual)
    {
        return view('layout_penjual.products.show', compact('productPenjual'));
    }

    function edit(ProductPenjual $productPenjual)
    {
        return view('layout_penjual.products.edit', compact('productPenjual'));
    }

    function update(Request $request, ProductPenjual $productPenjual)
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
            $productPenjual->photo = $photoPath;
        }

        $productPenjual->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'color' => $request->color,
            'quantity' => $request->quantity,
        ]);
        return redirect()->route('product_penjuals.index')->with('success', 'Produk berhasil diupdate');
    }

    function destroy(ProductPenjual $productPenjual)
    {
        $productPenjual->delete();

        return redirect()->route('product_penjuals.index')->with('success', 'Produk berhasil dihapus');
    }
}
