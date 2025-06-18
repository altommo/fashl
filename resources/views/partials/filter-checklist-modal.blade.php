<div id="filter-checklist-modal" class="fixed inset-0 bg-fashl-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-fashl-cream p-6 rounded-lg shadow-lg max-w-md w-full mx-4 relative">
    <button id="filter-checklist-close-button" class="absolute top-4 right-4 p-2 text-fashl-black" aria-label="Close modal">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <h2 class="font-montserrat text-2xl font-bold lowercase text-fashl-black mb-6 text-center">
      your filter checklist
    </h2>

    <p class="font-inter text-base text-fashl-black mb-4 text-center">
      select the filters you'd like to apply to your cart:
    </p>

    <form class="space-y-4">
      <div>
        <label class="flex items-center font-inter text-fashl-black">
          <input type="checkbox" class="form-checkbox text-fashl-sage rounded-sm mr-2">
          eco-friendly materials
        </label>
      </div>
      <div>
        <label class="flex items-center font-inter text-fashl-black">
          <input type="checkbox" class="form-checkbox text-fashl-sage rounded-sm mr-2">
          ethically produced
        </label>
      </div>
      <div>
        <label class="flex items-center font-inter text-fashl-black">
          <input type="checkbox" class="form-checkbox text-fashl-sage rounded-sm mr-2">
          made in the uk
        </label>
      </div>
      <button type="submit" class="btn btn-primary w-full mt-6">continue</button>
    </form>
  </div>
</div>
