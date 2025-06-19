<div id="quickViewModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
  <div class="relative h-full flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
      <div class="grid md:grid-cols-2 gap-8 p-8">
        {{-- Product Images --}}
        <div class="space-y-4">
          <img src="https://via.placeholder.com/800x1000/F5F5F5/1A1A1A?text=Main+Product+Image" alt="Product main image" class="w-full h-96 object-cover rounded-lg" id="quickViewMainImage">
          <div id="quickViewThumbnails" class="flex space-x-2 overflow-x-auto pb-2">
            {{-- Thumbnails will be dynamically inserted here --}}
          </div>
        </div>
        
        {{-- Product Details --}}
        <div class="space-y-6">
          <div>
            <h2 class="font-montserrat text-3xl font-bold lowercase mb-2" id="quickViewTitle">the midi wrap dress</h2>
            <p class="text-gray-600" id="quickViewDescription">effortless elegance for any occasion.</p>
          </div>
          
          <div class="text-3xl font-bold" id="quickViewPrice">£42.00</div>
          
          {{-- Size Selection --}}
          <div>
            <h3 class="font-semibold mb-3">size</h3>
            <div class="flex space-x-2">
              <button class="border border-gray-300 px-4 py-2 rounded hover:border-fashl-sage hover:text-fashl-sage">xs</button>
              <button class="border border-gray-300 px-4 py-2 rounded hover:border-fashl-sage hover:text-fashl-sage">s</button>
              <button class="border border-gray-300 px-4 py-2 rounded hover:border-fashl-sage hover:text-fashl-sage">m</button>
              <button class="border border-gray-300 px-4 py-2 rounded hover:border-fashl-sage hover:text-fashl-sage">l</button>
            </div>
          </div>
          
          {{-- Actions --}}
          <div class="space-y-3">
            <button class="btn btn-primary w-full py-4 text-lg">add to cart</button>
            <button class="btn btn-secondary w-full py-4 text-lg">add to wishlist</button>
          </div>
          
          {{-- Product Details --}}
          <div class="border-t pt-6 space-y-4">
            <details>
              <summary class="font-semibold cursor-pointer">fit & care</summary>
              <p class="mt-2 text-sm text-gray-600">Detailed fit and care instructions...</p>
            </details>
            <details>
              <summary class="font-semibold cursor-pointer">shipping & returns</summary>
              <p class="mt-2 text-sm text-gray-600">Shipping and return policy...</p>
            </details>
          </div>
        </div>
      </div>
      
      <button class="absolute top-4 right-4 p-2 hover:bg-gray-100 rounded-full" id="closeQuickView" aria-label="Close quick view">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </div>
</div>
