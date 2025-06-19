<div id="sizeRecommendationModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
  <div class="bg-fashl-cream p-6 rounded-lg shadow-lg max-w-md w-full mx-4 relative">
    <button id="close-size-recommendation-modal" class="absolute top-4 right-4 p-2 hover:bg-gray-100 rounded-full" aria-label="Close size recommendation modal">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <h2 class="font-montserrat text-2xl font-bold lowercase text-fashl-black mb-6 text-center">
      find your perfect size
    </h2>

    <p class="font-inter text-base text-fashl-black mb-4 text-center">
      enter your measurements for a personalized recommendation:
    </p>

    <form class="space-y-4">
      <div>
        <label for="height" class="font-inter text-sm text-fashl-black block mb-1">height (cm)</label>
        <input type="number" id="height" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="e.g., 165">
      </div>
      <div>
        <label for="bust" class="font-inter text-sm text-fashl-black block mb-1">bust (cm)</label>
        <input type="number" id="bust" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="e.g., 88">
      </div>
      <div>
        <label for="waist" class="font-inter text-sm text-fashl-black block mb-1">waist (cm)</label>
        <input type="number" id="waist" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="e.g., 68">
      </div>
      <div>
        <label for="hips" class="font-inter text-sm text-fashl-black block mb-1">hips (cm)</label>
        <input type="number" id="hips" class="w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" placeholder="e.g., 94">
      </div>
      <button type="submit" class="btn btn-primary w-full mt-6">get recommendation</button>
    </form>

    <div id="size-recommendation-result" class="mt-6 p-4 bg-fashl-white rounded-lg text-center hidden">
      <p class="font-inter text-lg font-semibold text-fashl-black">Recommended Size: <span class="text-fashl-sage">M</span></p>
      <p class="font-inter text-sm text-gray-600 mt-2">Based on your measurements, we recommend size Medium for a comfortable fit.</p>
    </div>
  </div>
</div>
