@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
      {{-- Product Gallery (Left Column) --}}
      <div class="lg:sticky lg:top-24 self-start">
        {{-- Main Image --}}
        <div class="mb-4">
          <img
            src="https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=800&h=1000&fit=crop&auto=format&q=80"
            alt="Main product image"
            class="w-full h-auto object-cover rounded-lg shadow-md"
          >
        </div>

        {{-- Thumbnails --}}
        <div class="flex space-x-2 overflow-x-auto pb-2">
          <img
            src="https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=150&h=180&fit=crop&auto=format&q=80"
            alt="Product thumbnail 1"
            class="w-20 h-24 object-cover rounded-md cursor-pointer border-2 border-fashl-sage"
          >
          <img
            src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=150&h=180&fit=crop&auto=format&q=80"
            alt="Product thumbnail 2"
            class="w-20 h-24 object-cover rounded-md cursor-pointer border-2 border-transparent hover:border-fashl-sage transition-colors"
          >
          <img
            src="https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=150&h=180&fit=crop&auto=format&q=80"
            alt="Product thumbnail 3"
            class="w-20 h-24 object-cover rounded-md cursor-pointer border-2 border-transparent hover:border-fashl-sage transition-colors"
          >
          <img
            src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=150&h=180&fit=crop&auto=format&q=80"
            alt="Product thumbnail 4"
            class="w-20 h-24 object-cover rounded-md cursor-pointer border-2 border-transparent hover:border-fashl-sage transition-colors"
          >
        </div>

        {{-- Vertical Video Embed (Placeholder) --}}
        <div class="mt-8 bg-fashl-gray rounded-lg overflow-hidden aspect-[9/16] max-w-sm mx-auto">
          <iframe
            src="https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0" {{-- Placeholder for a vertical video --}}
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            class="w-full h-full"
            title="Product Video"
          ></iframe>
        </div>
      </div>

      {{-- Product Info Panel (Right Column) --}}
      <div>
        <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-2">the midi wrap dress</h1>
        <p class="font-inter text-2xl font-semibold text-fashl-black mb-6">£42.00</p>

        {{-- Stock & Pre-Order --}}
        <p class="font-inter text-sm text-green-600 mb-6">In Stock—Ships in 2–3 days</p>
        {{-- <p class="font-inter text-sm text-orange-600 mb-6">Pre-Order—Ships in 10 days</p> --}}

        {{-- Size Selector --}}
        <div class="mb-6">
          <h3 class="font-montserrat text-lg lowercase font-semibold mb-3">size</h3>
          <div class="grid grid-cols-4 gap-2 text-sm">
            <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
              <input type="radio" name="size" value="xs" class="sr-only peer">
              <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">XS</span>
            </label>
            <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
              <input type="radio" name="size" value="s" class="sr-only peer">
              <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">S</span>
            </label>
            <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
              <input type="radio" name="size" value="m" class="sr-only peer">
              <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">M</span>
            </label>
            <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
              <input type="radio" name="size" value="l" class="sr-only peer">
              <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">L</span>
            </label>
            <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
              <input type="radio" name="size" value="xl" class="sr-only peer">
              <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">XL</span>
            </label>
          </div>
          <a href="#" class="font-inter text-sm text-fashl-sage mt-2 block hover:underline">view sizing chart</a>
          {{-- Size Recommendation Engine Placeholder --}}
          <button class="btn btn-secondary mt-4 text-sm px-4 py-2">get size recommendation</button>
        </div>

        {{-- Quantity Selector & Add to Cart --}}
        <div class="flex items-center space-x-4 mb-6">
          <label for="quantity" class="sr-only">Quantity</label>
          <input
            type="number"
            id="quantity"
            name="quantity"
            min="1"
            value="1"
            class="w-20 p-2 border border-fashl-gray rounded-md text-center text-fashl-black focus:outline-none focus:ring-2 focus:ring-fashl-sage"
          >
          <button class="btn btn-primary flex-grow">add to cart</button>
        </div>

        {{-- Fit Notes --}}
        <details class="mb-6 border-b border-fashl-gray pb-4">
          <summary class="font-montserrat text-lg lowercase font-semibold cursor-pointer py-2 flex justify-between items-center">
            fit notes
            <svg class="w-5 h-5 transform transition-transform duration-200 details-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </summary>
          <div class="font-inter text-sm text-fashl-black pt-2">
            <p>This midi wrap dress offers an effortless elegance with a flattering silhouette. It runs true to size, designed to provide a comfortable yet tailored fit. The adjustable wrap allows for a customizable fit around the waist.</p>
            <ul class="list-disc list-inside mt-2">
              <li>Fabric: 100% Organic Cotton</li>
              <li>Care: Machine wash cold, tumble dry low</li>
              <li>Model is 5'8" and wears a size S</li>
            </ul>
          </div>
        </details>

        {{-- Finish the Look --}}
        <div class="mt-8">
          <h3 class="font-montserrat text-xl font-bold lowercase text-fashl-black mb-6">finish the look</h3>
          <div class="grid grid-cols-2 gap-4">
            <x-product-card
              title="minimalist earrings"
              price="£18.00"
              primaryImage="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop&auto=format&q=80"
              hoverImage="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop&auto=format&q=80&sat=-100"
              link="#"
            />
            <x-product-card
              title="classic leather clutch"
              price="£65.00"
              primaryImage="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=400&h=500&fit=crop&auto=format&q=80"
              hoverImage="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=400&h=500&fit=crop&auto=format&q=80&sat=-100"
              link="#"
            />
          </div>
        </div>

        {{-- Customer Reviews --}}
        <div class="mt-12">
          <h3 class="font-montserrat text-xl font-bold lowercase text-fashl-black mb-6">customer reviews</h3>
          
          {{-- Review Summary --}}
          <div class="flex items-center mb-6">
            <div class="flex text-fashl-sage text-xl mr-2">
              {{-- Placeholder for 5 stars --}}
              <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
            </div>
            <span class="font-inter text-fashl-black font-semibold">4.2 out of 5</span>
            <span class="font-inter text-gray-600 ml-2">(128 reviews)</span>
          </div>

          {{-- Individual Reviews --}}
          <div class="space-y-8">
            <div class="border-b border-fashl-gray pb-6">
              <div class="flex text-fashl-sage text-lg mb-2">
                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
              </div>
              <h4 class="font-montserrat text-lg lowercase font-semibold text-fashl-black mb-2">Absolutely love this dress!</h4>
              <p class="font-inter text-sm text-fashl-black mb-2">The fabric is so soft and comfortable, and the fit is incredibly flattering. I've received so many compliments!</p>
              <p class="font-inter text-xs text-gray-600">Reviewed by Jane D. on October 20, 2023</p>
            </div>

            <div class="border-b border-fashl-gray pb-6">
              <div class="flex text-fashl-sage text-lg mb-2">
                <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
              </div>
              <h4 class="font-montserrat text-lg lowercase font-semibold text-fashl-black mb-2">Great quality, minor sizing issue</h4>
              <p class="font-inter text-sm text-fashl-black mb-2">Beautiful dress and feels very well made. I found it ran a little small in the bust, so I'd recommend sizing up if you're between sizes.</p>
              <p class="font-inter text-xs text-gray-600">Reviewed by Emily R. on October 15, 2023</p>
            </div>
          </div>

          {{-- Write a Review Form --}}
          <div class="mt-10 bg-fashl-cream p-6 rounded-lg shadow-md">
            <h4 class="font-montserrat text-lg lowercase font-semibold text-fashl-black mb-4">write a review</h4>
            <form class="space-y-4">
              <div>
                <label for="review-rating" class="font-inter text-sm text-fashl-black block mb-1">your rating</label>
                <select id="review-rating" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage">
                  <option value="">Select a rating</option>
                  <option value="5">★★★★★ (5 stars)</option>
                  <option value="4">★★★★☆ (4 stars)</option>
                  <option value="3">★★★☆☆ (3 stars)</option>
                  <option value="2">★★☆☆☆ (2 stars)</option>
                  <option value="1">★☆☆☆☆ (1 star)</option>
                </select>
              </div>
              <div>
                <label for="review-title" class="font-inter text-sm text-fashl-black block mb-1">review title</label>
                <input type="text" id="review-title" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="e.g., 'Love it!' or 'Great product'">
              </div>
              <div>
                <label for="review-content" class="font-inter text-sm text-fashl-black block mb-1">your review</label>
                <textarea id="review-content" rows="5" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="Tell us what you think..."></textarea>
              </div>
              <div>
                <label for="review-name" class="font-inter text-sm text-fashl-black block mb-1">your name</label>
                <input type="text" id="review-name" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="e.g., Jane D.">
              </div>
              <button type="submit" class="btn btn-primary w-full">submit review</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
