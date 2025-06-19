@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">my wishlist</h1>

    <div class="max-w-4xl mx-auto bg-fashl-cream p-6 rounded-lg shadow-md">
      @php
        $wishlistItems = [
          [
            'id' => 1,
            'image' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=100&h=120&fit=crop&auto=format&q=80',
            'title' => 'the midi wrap dress',
            'price' => 42.00,
          ],
          [
            'id' => 2,
            'image' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=100&h=120&fit=crop&auto=format&q=80',
            'title' => 'oversized knit sweater',
            'price' => 55.00,
          ],
        ];
      @endphp

      @if (empty($wishlistItems))
        <p class="text-center text-fashl-black font-inter text-lg">Your wishlist is empty.</p>
        <div class="text-center mt-6">
          <a href="/shop" class="btn btn-primary">start shopping</a>
        </div>
      @else
        <div class="space-y-6">
          @foreach ($wishlistItems as $item)
            <div class="flex items-center space-x-4 border-b border-fashl-gray pb-4 last:border-b-0 last:pb-0">
              <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-24 h-28 object-cover rounded-md">
              <div class="flex-grow">
                <h3 class="font-montserrat text-lg lowercase text-fashl-black leading-tight">{{ $item['title'] }}</h3>
                <p class="font-inter text-base font-semibold text-fashl-black mt-1">£{{ number_format($item['price'], 2) }}</p>
              </div>
              <div class="flex flex-col items-end space-y-2">
                <button class="btn btn-primary px-4 py-2 text-sm">add to cart</button>
                <button class="font-inter text-sm text-red-600 hover:underline">remove</button>
              </div>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </div>
@endsection
