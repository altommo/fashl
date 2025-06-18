<div id="mobile-filter-panel" class="fixed inset-0 bg-fashl-cream transform translate-x-full lg:hidden z-50 overflow-y-auto transition-transform duration-300 ease-in-out">
  <div class="p-4 flex items-center justify-between border-b border-fashl-gray">
    <h3 class="font-montserrat text-xl font-bold lowercase text-fashl-black">filters</h3>
    <button id="mobile-filter-close-button" class="p-2 text-fashl-black" aria-label="Close filters">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>

  <div class="p-6">
    {{-- Category Filter --}}
    <div class="mb-6">
      <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">category</h4>
      <ul class="space-y-2 text-sm">
        <li><label class="flex items-center"><input type="checkbox" class="form-checkbox text-fashl-sage rounded-sm mr-2"> dresses</label></li>
        <li><label class="flex items-center"><input type="checkbox" class="form-checkbox text-fashl-sage rounded-sm mr-2"> tops</label></li>
        <li><label class="flex items-center"><input type="checkbox" class="form-checkbox text-fashl-sage rounded-sm mr-2"> bottoms</label></li>
        <li><label class="flex items-center"><input type="checkbox" class="form-checkbox text-fashl-sage rounded-sm mr-2"> accessories</label></li>
      </ul>
    </div>

    {{-- Size Filter --}}
    <div class="mb-6">
      <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">size</h4>
      <div class="grid grid-cols-3 gap-2 text-sm">
        <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
          <input type="checkbox" class="sr-only peer">
          <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">XS</span>
        </label>
        <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
          <input type="checkbox" class="sr-only peer">
          <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">S</span>
        </label>
        <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
          <input type="checkbox" class="sr-only peer">
          <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">M</span>
        </label>
        <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
          <input type="checkbox" class="sr-only peer">
          <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">L</span>
        </label>
        <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
          <input type="checkbox" class="sr-only peer">
          <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">XL</span>
        </label>
      </div>
    </div>

    {{-- Color Filter (simplified) --}}
    <div class="mb-6">
      <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">color</h4>
      <div class="flex space-x-2">
        <label class="w-6 h-6 rounded-full bg-fashl-black border border-fashl-gray cursor-pointer"></label>
        <label class="w-6 h-6 rounded-full bg-fashl-sage border border-fashl-gray cursor-pointer"></label>
        <label class="w-6 h-6 rounded-full bg-fashl-white border border-fashl-gray cursor-pointer"></label>
      </div>
    </div>

    {{-- Price Range (placeholder) --}}
    <div class="mb-6">
      <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">price</h4>
      <input type="range" min="0" max="200" value="100" class="w-full h-2 bg-fashl-gray rounded-lg appearance-none cursor-pointer accent-fashl-sage">
      <div class="flex justify-between text-sm mt-2">
        <span>£0</span>
        <span>£200</span>
      </div>
    </div>

    <button class="btn btn-primary w-full">apply filters</button>
  </div>
</div>
