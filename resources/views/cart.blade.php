@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">your cart</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      {{-- Cart Items List (Left/Main Column) --}}
      <div class="lg:col-span-2 bg-fashl-cream p-6 rounded-lg shadow-md">
        @php
          $cartItems = [
            [
              'id' => 1,
              'image' => 'https://via.placeholder.com/100x120/F5F5F5/1A1A1A?text=Product+1',
              'title' => 'the midi wrap dress',
              'size' => 'M',
              'price' => 42.00,
              'quantity' => 1,
            ],
            [
              'id' => 2,
              'image' => 'https://via.placeholder.com/100x120/F9F6F1/1A1A1A?text=Product+2',
              'title' => 'minimalist earrings',
              'size' => 'N/A',
              'price' => 18.00,
              'quantity' => 2,
            ],
          ];
          $subtotal = array_reduce($cartItems, fn($sum, $item) => $sum + ($item['price'] * $item['quantity']), 0);
          $shipping = 5.00; // Example shipping
          $total = $subtotal + $shipping;
        @endphp

        @if (empty($cartItems))
          <p class="text-center text-fashl-black font-inter text-lg">Your cart is empty.</p>
          <div class="text-center mt-6">
            <a href="/shop" class="btn btn-primary">start shopping</a>
          </div>
        @else
          <div class="space-y-6">
            @foreach ($cartItems as $item)
              <div class="flex items-center space-x-4 border-b border-fashl-gray pb-4 last:border-b-0 last:pb-0">
                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-24 h-28 object-cover rounded-md">
                <div class="flex-grow">
                  <h3 class="font-montserrat text-lg lowercase text-fashl-black leading-tight">{{ $item['title'] }}</h3>
                  <p class="font-inter text-sm text-gray-600">Size: {{ $item['size'] }}</p>
                  <p class="font-inter text-base font-semibold text-fashl-black mt-1">£{{ number_format($item['price'], 2) }}</p>
                </div>
                <div class="flex flex-col items-end space-y-2">
                  <input
                    type="number"
                    min="1"
                    value="{{ $item['quantity'] }}"
                    class="w-16 p-2 border border-fashl-gray rounded-md text-center text-fashl-black focus:outline-none focus:ring-2 focus:ring-fashl-sage"
                  >
                  <button class="font-inter text-sm text-red-600 hover:underline">remove</button>
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>

      {{-- Cart Summary (Right Column) --}}
      <div class="lg:col-span-1 bg-fashl-cream p-6 rounded-lg shadow-md h-fit">
        <h2 class="font-montserrat text-xl font-bold lowercase text-fashl-black mb-6">order summary</h2>

        <div class="space-y-3 font-inter text-fashl-black">
          <div class="flex justify-between">
            <span>subtotal</span>
            <span>£{{ number_format($subtotal, 2) }}</span>
          </div>
          <div class="flex justify-between">
            <span>shipping</span>
            <span>£{{ number_format($shipping, 2) }}</span>
          </div>
          <div class="flex justify-between font-bold text-lg border-t border-fashl-gray pt-3 mt-3">
            <span>total</span>
            <span>£{{ number_format($total, 2) }}</span>
          </div>
        </div>

        <button class="btn btn-primary w-full mt-8">proceed to checkout</button>

        {{-- Filter Checklist Modal Trigger (Placeholder) --}}
        <div class="mt-6 text-center">
          <button class="font-inter text-sm text-fashl-sage hover:underline">
            add a filter checklist
          </button>
        </div>

        {{-- Loyalty Summary (Placeholder) --}}
        <div class="mt-4 text-center font-inter text-sm text-fashl-black">
          <p>you have <span class="font-semibold">150 points</span>—£5 discount available.</p>
          <a href="#" class="text-fashl-sage hover:underline">redeem now</a>
        </div>
      </div>
    </div>
  </div>
@endsection
