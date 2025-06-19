<section class="py-16 bg-fashl-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="font-montserrat text-3xl font-bold lowercase text-fashl-black mb-4">
        #fashlstyle
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        see how our community styles their favorite pieces
      </p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
      @for($i = 1; $i <= 8; $i++)
      <div class="aspect-square overflow-hidden rounded-lg group cursor-pointer">
        <img 
          src="https://via.placeholder.com/300x300/{{ $i % 2 == 0 ? '9CAF88' : 'F9F6F1' }}/1A1A1A?text=UGC+{{ $i }}"
          alt="Customer photo {{ $i }}"
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
          loading="lazy"
        >
      </div>
      @endfor
    </div>
    
    <div class="text-center">
      <a href="/gallery" class="btn btn-secondary">
        view all photos
      </a>
    </div>
  </div>
</section>
