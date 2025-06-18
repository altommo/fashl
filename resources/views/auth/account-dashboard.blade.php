@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">my account</h1>

    <div class="max-w-6xl mx-auto bg-fashl-cream p-6 rounded-lg shadow-md grid grid-cols-1 lg:grid-cols-4 gap-8">
      {{-- Account Navigation (Sidebar) --}}
      <div class="lg:col-span-1">
        <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">dashboard</h2>
        <nav class="space-y-2 font-inter text-fashl-black">
          <a href="#orders" class="block p-2 rounded-md hover:bg-fashl-gray hover:text-fashl-sage transition-colors duration-200">orders</a>
          <a href="#addresses" class="block p-2 rounded-md hover:bg-fashl-gray hover:text-fashl-sage transition-colors duration-200">addresses</a>
          <a href="#loyalty" class="block p-2 rounded-md hover:bg-fashl-gray hover:text-fashl-sage transition-colors duration-200">loyalty points</a>
          <a href="#ugc" class="block p-2 rounded-md hover:bg-fashl-gray hover:text-fashl-sage transition-colors duration-200">ugc submission</a>
          <a href="#" class="block p-2 rounded-md text-red-600 hover:bg-fashl-gray hover:text-red-800 transition-colors duration-200">logout</a>
        </nav>
      </div>

      {{-- Account Content (Main Area) --}}
      <div class="lg:col-span-3">
        {{-- Orders List --}}
        <section id="orders" class="mb-8">
          <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">my orders</h2>
          <div class="bg-fashl-white p-4 rounded-md shadow-sm">
            <p class="font-inter text-fashl-black">You haven't placed any orders yet.</p>
            {{-- Example Order --}}
            {{--
            <div class="border-b border-fashl-gray pb-4 mb-4 last:border-b-0 last:pb-0">
              <div class="flex justify-between items-center mb-2">
                <span class="font-semibold">Order #12345</span>
                <span class="text-sm text-gray-600">Date: 2023-10-26</span>
              </div>
              <ul class="list-disc list-inside text-sm text-fashl-black">
                <li>The Midi Wrap Dress (M) - £42.00</li>
                <li>Minimalist Earrings (x2) - £36.00</li>
              </ul>
              <div class="flex justify-between items-center mt-2">
                <span class="font-semibold">Total: £83.00</span>
                <a href="#" class="text-fashl-sage hover:underline text-sm">view details</a>
              </div>
            </div>
            --}}
          </div>
        </section>

        {{-- Addresses --}}
        <section id="addresses" class="mb-8">
          <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">my addresses</h2>
          <div class="bg-fashl-white p-4 rounded-md shadow-sm">
            <p class="font-inter text-fashl-black">No addresses saved yet.</p>
            {{-- Example Address --}}
            {{--
            <div class="border-b border-fashl-gray pb-4 mb-4 last:border-b-0 last:pb-0">
              <h3 class="font-semibold mb-1">Billing Address</h3>
              <p class="text-sm text-fashl-black">John Doe<br>123 Fashion St<br>London, SW1A 0AA<br>United Kingdom</p>
              <a href="#" class="text-fashl-sage hover:underline text-sm mt-2 block">edit</a>
            </div>
            --}}
          </div>
        </section>

        {{-- Loyalty Points --}}
        <section id="loyalty" class="mb-8">
          <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">loyalty points</h2>
          <div class="bg-fashl-white p-4 rounded-md shadow-sm">
            <p class="font-inter text-fashl-black">You currently have <span class="font-semibold">0 points</span>.</p>
            <p class="font-inter text-sm text-gray-600 mt-2">Earn points with every purchase and redeem them for exclusive discounts!</p>
            <a href="#" class="text-fashl-sage hover:underline text-sm mt-2 block">learn more about our loyalty program</a>
          </div>
        </section>

        {{-- UGC Submission Form --}}
        <section id="ugc" class="mb-8">
          <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">ugc submission</h2>
          <div class="bg-fashl-white p-4 rounded-md shadow-sm">
            <p class="font-inter text-fashl-black mb-4">Share your #fashlstyle with us! Upload your photos wearing Fashl pieces.</p>
            <form class="space-y-4">
              <div>
                <label for="ugc_photo" class="font-inter text-sm text-fashl-black block mb-1">upload photo</label>
                <input type="file" id="ugc_photo" name="ugc_photo" accept="image/*" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage">
              </div>
              <div>
                <label for="ugc_caption" class="font-inter text-sm text-fashl-black block mb-1">caption (optional)</label>
                <textarea id="ugc_caption" name="ugc_caption" rows="3" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="tell us about your look..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary">submit photo</button>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection
