<div class="product-card bg-fashl-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 relative group">
  {{-- Badge slot for "L-Limited" --}}
  @if(isset($badge) && $badge)
    <span class="absolute top-2 left-2 bg-fashl-sage text-fashl-white px-2 py-1 text-xs uppercase rounded z-10">
      {{ $badge }}
    </span>
  @endif

  {{-- Image container with hover swap (requires Alpine.js for full functionality) --}}
  <div class="relative overflow-hidden">
    <a href="{{ $link ?? '#' }}">
      <img
        src="{{ $image ?? 'https://via.placeholder.com/400x500/F5F5F5/1A1A1A?text=Product+Image' }}"
        alt="{{ $title ?? 'Product' }}"
        class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105"
        loading="lazy"
      >
      {{-- Alternate image for hover (uncomment and add src for actual functionality) --}}
      {{-- <img
        src="{{ $hoverImage ?? 'https://via.placeholder.com/400x500/F9F6F1/1A1A1A?text=Hover+Image' }}"
        alt="{{ $title ?? 'Product' }} Hover"
        class="w-full h-64 object-cover absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
        loading="lazy"
      > --}}
    </a>
  </div>

  <div class="p-4">
    <h3 class="mt-2 text-base font-montserrat font-bold lowercase text-fashl-black leading-tight">
      <a href="{{ $link ?? '#' }}" class="hover:text-fashl-sage">{{ $title ?? 'Product Title' }}</a>
    </h3>
    @if(isset($description) && $description)
      <p class="mt-1 text-sm text-gray-600">{{ $description }}</p>
    @endif
    <p class="mt-1 text-lg font-semibold text-fashl-black">{{ $price ?? '£XX.XX' }}</p>
    <a href="{{ $link ?? '#' }}" class="btn btn-primary w-full mt-4">shop now</a>
  </div>
</div>
