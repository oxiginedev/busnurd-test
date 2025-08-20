<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController
{
    public function index(Request $request): View
    {
        $products = Product::query()
            ->where('user_id', Auth::id())
            ->latest()
            ->simplePaginate(20);

        return view('products.index', [
            'products' => $products,
        ]);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(CreateProductRequest $request): RedirectResponse
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');

            $request->merge([
                'image' => $path,
            ]);
        }

        $product = Product::create([
            'user_id' => Auth::id(),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image', null),
        ]);

        return redirect()->route('products.show', $product);
    }

    public function show(Product $product): View
    {
        return view('products.show', [
            'product' => $product,
        ]);
    }
}
