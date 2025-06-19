<div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-500 touch-manipulation">
  {{-- Product Image Container --}}
  <div class="relative overflow-hidden">
    {{-- Primary Image with responsive sources --}}
    <picture>
      <source 
        srcset="{{ $primaryImageWebpSmall ?? 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=300&h=400&fit=crop&auto=format&q=80' }} 300w,
                {{ $primaryImageWebpMedium ?? 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80' }} 600w,
                {{ $primaryImageWebpLarge ?? 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=1200&h=1600&fit=crop&auto=format&q=80' }} 1200w" 
        type="image/webp"
        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw"
      >
      <img 
        src="{{ $primaryImage ?? 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80' }}" 
        alt="{{ $title ?? 'Product' }}"
        class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700 group-active:scale-105"
        loading="lazy"
        srcset="{{ $primaryImageSmall ?? 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=300&h=400&fit=crop&auto=format&q=80' }} 300w,
                {{ $primaryImageMedium ?? 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80' }} 600w,
                {{ $primaryImageLarge ?? 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=1200&h=1600&fit=crop&auto=format&q=80' }} 1200w"
        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw"
      >
    </picture>

    {{-- Hover Image with responsive sources --}}
    <picture class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
      <source 
        srcset="{{ $hoverImageWebpSmall ?? 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=300&h=400&fit=crop&auto=format&q=80' }} 300w,
                {{ $hoverImageWebpMedium ?? 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80' }} 600w,
                {{ $hoverImageWebpLarge ?? 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=1200&h=1600&fit=crop&auto=format&q=80' }} 1200w" 
        type="image/webp"
        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw"
      >
      <img 
        src="{{ $hoverImage ?? 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80' }}" 
        alt="{{ $title ?? 'Product' }} alternate view"
        class="w-full h-80 object-cover"
        loading="lazy"
        srcset="{{ $hoverImageSmall ?? 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=300&h=400&fit=crop&auto=format&q=80' }} 300w,
                {{ $hoverImageMedium ?? 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80' }} 600w,
                {{ $hoverImageLarge ?? 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=1200&h=1600&fit=crop&auto=format&q=80' }} 1200w"
        sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw"
      >
    </picture>
    
    {{-- Quick Actions Overlay (Desktop Hover) --}}
    <div class="absolute inset-0 bg-black/20 opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 lg:flex items-center justify-center hidden">
      <div class="flex gap-3">
        <button class="bg-white text-black p-3 rounded-full hover:bg-gray-100 transition-colors open-quick-view" aria-label="Quick View">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
          </svg>
        </button>
        <button class="bg-white text-black p-3 rounded-full hover:bg-gray-100 transition-colors" aria-label="Add to Wishlist">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
          </svg>
        </button>
      </div>
    </div>

    {{-- Mobile-friendly quick actions (appears on touch/active) --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-active:opacity-100 transition-opacity duration-200 lg:hidden">
      <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end">
        <div class="text-white">
          <h3 class="font-semibold text-sm mb-1">{{ $title ?? 'Product Title' }}</h3>
          <p class="text-lg font-bold">{{ $price ?? '£XX.XX' }}</p>
        </div>
        <button class="bg-white text-black p-3 rounded-full min-h-[44px] min-w-[44px] flex items-center justify-center" aria-label="Add to Cart">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
          </svg>
        </button>
      </div>
    </div>
    
    {{-- NEW badge for new products --}}
    @if($isNew ?? false)
      <span class="absolute top-4 left-4 bg-fashl-sage text-white px-3 py-1 text-xs font-bold uppercase rounded-full">
        new
      </span>
    @endif
  </div>
  
  {{-- Product Info --}}
  <div class="p-6 lg:block hidden"> {{-- Hide on mobile, shown in overlay --}}
    <h3 class="font-montserrat text-xl font-bold lowercase text-fashl-black mb-2 group-hover:text-fashl-sage transition-colors">
      {{ $title ?? 'Product Title' }}
    </h3>
    <p class="text-gray-600 text-sm mb-4">{{ $description ?? 'A brief description of the product.' }}</p>
    
    <div class="flex items-center justify-between">
      <span class="text-2xl font-bold text-fashl-black">{{ $price ?? '£XX.XX' }}</span>
      <button class="btn btn-primary px-6 py-2 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
        add to cart
      </button>
    </div>
  </div>
</div>
