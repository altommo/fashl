@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">your cart</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      {{-- Cart Items List (Left/Main Column) --}}
      <div class="lg:col-span-2 bg-fashl-cream p-6 rounded-lg shadow-md">
        <div id="cart-empty-message" class="text-center text-fashl-black font-inter text-lg hidden">
          <p>Your cart is empty.</p>
          <div class="text-center mt-6">
            <a href="/shop" class="btn btn-primary">start shopping</a>
          </div>
        </div>
        <div id="cart-items-container" class="space-y-6">
          {{-- Cart items will be dynamically inserted here by JavaScript --}}
        </div>
      </div>

      {{-- Cart Summary (Right Column) --}}
      <div id="cart-summary-section" class="lg:col-span-1 bg-fashl-cream p-6 rounded-lg shadow-md h-fit hidden">
        <h2 class="font-montserrat text-xl font-bold lowercase text-fashl-black mb-6">order summary</h2>

        <div class="space-y-3 font-inter text-fashl-black">
          <div class="flex justify-between">
            <span>subtotal</span>
            <span id="cart-subtotal">£0.00</span>
          </div>
          <div class="flex justify-between">
            <span>shipping</span>
            <span id="cart-shipping">£0.00</span>
          </div>
          <div class="flex justify-between font-bold text-lg border-t border-fashl-gray pt-3 mt-3">
            <span>total</span>
            <span id="cart-total">£0.00</span>
          </div>
        </div>

        <button class="btn btn-primary w-full mt-8">proceed to checkout</button>

        {{-- Filter Checklist Modal Trigger (Placeholder) --}}
        <div class="mt-6 text-center">
          <button id="open-filter-checklist-modal" class="font-inter text-sm text-fashl-sage hover:underline">
            add a filter checklist
          </button>
        </div>

        {{-- Loyalty Summary (Placeholder) --}}
        <div class="mt-4 text-center font-inter text-sm text-fashl-black">
          <p>you have <span class="font-semibold">150 points</span>—£5 discount available.</p>
          <a href="#" class="text-fashl-sage hover:underline">redeem now</a>
        </div>

        {{-- Abandoned Cart Recovery Placeholder --}}
        <div class="mt-8 p-4 bg-fashl-gray rounded-lg text-center">
          <p class="font-inter text-sm text-fashl-black mb-2">Don't miss out! Your cart items are waiting.</p>
          <a href="/checkout" class="btn btn-accent text-sm px-4 py-2">complete your order</a>
        </div>
      </div>
    </div>
  </div>

  @include('partials.filter-checklist-modal')
@endsection
