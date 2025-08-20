@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-lg rounded-lg max-w-2xl mx-auto">
        <div class="px-6 py-4 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-800">{{ $product->name }}</h1>
        </div>
        <div class="px-6 py-6">
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-1/2 flex justify-center items-center">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-auto rounded-lg shadow mb-4 md:mb-0">
                    @else
                        <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image" class="w-full h-auto rounded-lg shadow mb-4 md:mb-0">
                    @endif
                </div>
                <div class="md:w-1/2 flex flex-col justify-between">
                    <h3 class="text-xl text-blue-600 font-semibold mb-2">Price: ₦{{ number_format($product->price, 2) }}</h3>
                    <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                    <p class="mb-2"><span class="font-semibold text-gray-800">Category:</span> {{ $product->category->name ?? 'Uncategorized' }}</p>
                    <p class="mb-4"><span class="font-semibold text-gray-800">Stock:</span> {{ $product->stock }}</p>
                    <a href="{{ route('products.index') }}" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded transition mt-4">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
