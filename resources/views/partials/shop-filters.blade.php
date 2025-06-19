<div class="bg-fashl-cream p-6 rounded-lg shadow-md sticky top-24 hidden lg:block">
  <h3 class="font-montserrat text-xl font-bold lowercase text-fashl-black mb-6">filters</h3>

  {{-- Category Filter --}}
  <div id="filter-category" class="mb-6" data-filter-type="category">
    <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">category</h4>
    <ul class="space-y-2 text-sm">
      <li><label class="flex items-center"><input type="checkbox" name="category" value="dresses" class="form-checkbox text-fashl-sage rounded-sm mr-2"> dresses</label></li>
      <li><label class="flex items-center"><input type="checkbox" name="category" value="tops" class="form-checkbox text-fashl-sage rounded-sm mr-2"> tops</label></li>
      <li><label class="flex items-center"><input type="checkbox" name="category" value="bottoms" class="form-checkbox text-fashl-sage rounded-sm mr-2"> bottoms</label></li>
      <li><label class="flex items-center"><input type="checkbox" name="category" value="accessories" class="form-checkbox text-fashl-sage rounded-sm mr-2"> accessories</label></li>
    </ul>
  </div>

  {{-- Size Filter --}}
  <div id="filter-size" class="mb-6" data-filter-type="size">
    <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">size</h4>
    <div class="grid grid-cols-3 gap-2 text-sm">
      <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
        <input type="checkbox" name="size" value="XS" class="sr-only peer">
        <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">XS</span>
      </label>
      <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
        <input type="checkbox" name="size" value="S" class="sr-only peer">
        <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">S</span>
      </label>
      <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
        <input type="checkbox" name="size" value="M" class="sr-only peer">
        <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">M</span>
      </label>
      <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
        <input type="checkbox" name="size" value="L" class="sr-only peer">
        <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">L</span>
      </label>
      <label class="flex items-center justify-center border border-fashl-black rounded-md p-2 cursor-pointer hover:bg-fashl-black hover:text-fashl-white transition-colors duration-200">
        <input type="checkbox" name="size" value="XL" class="sr-only peer">
        <span class="peer-checked:bg-fashl-black peer-checked:text-fashl-white">XL</span>
      </label>
    </div>
  </div>

  {{-- Color Filter (simplified) --}}
  <div id="filter-color" class="mb-6" data-filter-type="color">
    <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">color</h4>
    <div class="flex space-x-2">
      <label class="w-6 h-6 rounded-full bg-fashl-black border border-fashl-gray cursor-pointer">
        <input type="radio" name="color" value="black" class="sr-only peer">
        <span class="sr-only">Black</span>
      </label>
      <label class="w-6 h-6 rounded-full bg-fashl-sage border border-fashl-gray cursor-pointer">
        <input type="radio" name="color" value="sage" class="sr-only peer">
        <span class="sr-only">Sage</span>
      </label>
      <label class="w-6 h-6 rounded-full bg-fashl-white border border-fashl-gray cursor-pointer">
        <input type="radio" name="color" value="white" class="sr-only peer">
        <span class="sr-only">White</span>
      </label>
    </div>
  </div>

  {{-- Price Range --}}
  <div id="filter-price" class="mb-6" data-filter-type="price">
    <h4 class="font-montserrat text-lg lowercase font-semibold mb-3">price</h4>
    <input type="range" id="price-range-input" min="0" max="200" value="200" class="w-full h-2 bg-fashl-gray rounded-lg appearance-none cursor-pointer accent-fashl-sage">
    <div class="flex justify-between text-sm mt-2">
      <span>£0</span>
      <span id="price-range-value">£200</span>
    </div>
  </div>

  <button id="apply-filters-button" class="btn btn-primary w-full">apply filters</button>
</div>
