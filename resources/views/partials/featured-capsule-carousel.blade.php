<section class="py-16 bg-fashl-cream">
  <div class="container mx-auto px-4">
    <h2 class="font-montserrat text-3xl font-bold lowercase text-fashl-black text-center mb-12">
      featured capsules
    </h2>
    <div class="overflow-x-auto">
      <div class="flex space-x-6 pb-4">
        @for($i = 1; $i <= 4; $i++)
        <div class="flex-shrink-0 w-80">
          <x-product-card
            title="capsule {{ $i }}"
            price="£45"
            primaryImage="https://via.placeholder.com/320x400/9CAF88/FFFFFF?text=Capsule+{{ $i }}"
            hoverImage="https://via.placeholder.com/320x400/F9F6F1/1A1A1A?text=Capsule+{{ $i }}+Hover"
            @if($i == 1) isNew @endif
          />
        </div>
        @endfor
      </div>
    </div>
  </div>
</section>
