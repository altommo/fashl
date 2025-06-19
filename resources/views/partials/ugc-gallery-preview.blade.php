<section class="py-20 bg-gradient-to-b from-fashl-cream to-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="font-montserrat text-5xl font-bold lowercase text-fashl-black mb-6">
        #fashlstyle
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        see how our community styles their favorite pieces. share your look for a chance to be featured and earn fashl rewards
      </p>
    </div>
    
    {{-- Instagram-style grid --}}
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-12">
      @php
        $ugcPosts = [
          ['image' => 'https://via.placeholder.com/600x600/F9F6F1/1A1A1A?text=UGC+1', 'likes' => 123, 'comments' => 15, 'username' => 'fashionista_gal', 'products' => true],
          ['image' => 'https://via.placeholder.com/300x300/9CAF88/FFFFFF?text=UGC+2', 'likes' => 87, 'comments' => 8, 'username' => 'style_maven', 'products' => false],
          ['image' => 'https://via.placeholder.com/300x300/F5F5F5/1A1A1A?text=UGC+3', 'likes' => 201, 'comments' => 22, 'username' => 'trendsetter_x', 'products' => true],
          ['image' => 'https://via.placeholder.com/300x300/F9F6F1/1A1A1A?text=UGC+4', 'likes' => 55, 'comments' => 3, 'username' => 'chic_vibes', 'products' => false],
          ['image' => 'https://via.placeholder.com/300x300/9CAF88/FFFFFF?text=UGC+5', 'likes' => 180, 'comments' => 19, 'username' => 'daily_looks', 'products' => true],
          ['image' => 'https://via.placeholder.com/300x300/F5F5F5/1A1A1A?text=UGC+6', 'likes' => 99, 'comments' => 10, 'username' => 'minimal_style', 'products' => false],
          ['image' => 'https://via.placeholder.com/300x300/F9F6F1/1A1A1A?text=UGC+7', 'likes' => 145, 'comments' => 12, 'username' => 'urban_fashion', 'products' => true],
          ['image' => 'https://via.placeholder.com/300x300/9CAF88/FFFFFF?text=UGC+8', 'likes' => 72, 'comments' => 5, 'username' => 'eco_chic', 'products' => false],
        ];
      @endphp
      @foreach($ugcPosts as $index => $post)
      <div class="relative group cursor-pointer overflow-hidden rounded-xl {{ $index === 0 ? 'md:col-span-2 md:row-span-2' : '' }}">
        <img 
          src="{{ $post['image'] }}" 
          alt="Customer style {{ $index + 1 }}"
          class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
          loading="lazy"
        >
        
        {{-- Hover overlay --}}
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <div class="text-white text-center">
            <div class="flex items-center justify-center space-x-4 mb-2">
              <span class="flex items-center gap-1">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                </svg>
                {{ $post['likes'] }}
              </span>
              <span class="flex items-center gap-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                {{ $post['comments'] }}
              </span>
            </div>
            <p class="text-sm">@{{ $post['username'] }}</p>
          </div>
        </div>
        
        {{-- Product tags --}}
        @if($post['products'] ?? false)
          <div class="absolute bottom-4 left-4">
            <button class="bg-white/90 text-black px-3 py-1 rounded-full text-xs font-medium hover:bg-white transition-colors">
              shop this look
            </button>
          </div>
        @endif
      </div>
      @endforeach
    </div>
    
    {{-- CTA Section --}}
    <div class="text-center space-y-6">
      <div class="inline-flex items-center gap-4 bg-white rounded-full px-8 py-4 shadow-lg">
        <span class="text-gray-600">share your #fashlstyle</span>
        <div class="flex space-x-3">
          <a href="#" class="text-pink-500 hover:text-pink-600 transition-colors" aria-label="Instagram">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.792.01 3.249.064.438.054.679.187.848.289.315.191.56.429.848.717.289.289.526.533.717.848.102.169.235.41.289.849.054.457.064.818.064 3.249v.001l.001 4.686c0 2.43-.01 2.792-.064 3.249-.054.438-.187.679-.289.848-.191.315-.429.56-.717.848-.289.289-.533.526-.848.717-.169.102-.41.235-.849.289-.457.054-.818.064-3.249.064h-.001L7.315 22c-2.43 0-2.792-.01-3.249-.064-.438-.054-.679-.187-.848-.289-.315-.191-.56-.429-.848-.717-.289-.289-.526-.533-.717-.848-.102-.169-.235-.41-.289-.849-.054-.457-.064-.818-.064-3.249v-.001L2 7.315c0-2.43.01-2.792.064-3.249.054-.438.187-.679.289-.848.191-.315.429-.56.717-.848.289-.289.533-.526.848-.717.169-.102.41-.235.289-.849.054-.457.064-.818.064-3.249v-.001L7.315 2h-.001zm-.001 1.442c-2.058 0-2.313.009-3.11.053-.32.04-.48.106-.59.178-.2.13-.333.267-.46.394-.127.127-.264.26-.394.46-.072.11-.138.27-.178.59-.044.797-.053 1.052-.053 3.11v.001l.001 4.686c0 2.058-.009 2.313-.053 3.11-.04.32-.106.48-.178.59-.13.2-.267.333-.394.46-.127.127-.26.26-.46.394-.11.072-.27.138-.59.178-.797.044-1.052.053-3.11.053h-.001L3.442 20.558c2.058 0 2.313-.009 3.11-.053.32-.04.48-.106.59-.178.2-.13.333-.267.46-.394.127-.127.26-.26.46-.394.11-.072.27-.138.59-.178.797-.044 1.052-.053 3.11-.053h.001L20.558 3.442zM12 7.315a4.685 4.685 0 100 9.37 4.685 4.685 0 000-9.37zm0 1.442a3.243 3.243 0 110 6.486 3.243 3.243 0 010-6.486zM18.5 5.815a1.285 1.285 0 100 2.57 1.285 1.285 0 000-2.57z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="#" class="text-black hover:text-gray-700 transition-colors" aria-label="TikTok">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12.315 2c2.43 0 2.792.01 3.249.064.438.054.679.187.848.289.315.191.56.429.848.717.289.289.526.533.717.848.102.169.235.41.289.849.054.457.064.818.064 3.249v.001l.001 4.686c0 2.43-.01 2.792-.064 3.249-.054.438-.187.679-.289.848-.191.315-.429.56-.717.848-.289.289-.533.526-.848.717-.169.102-.41.235-.849.289-.457.054-.818.064-3.249.064h-.001L7.315 22c-2.43 0-2.792-.01-3.249-.064-.438-.054-.679-.187-.848-.289-.315-.191-.56-.429-.848-.717-.289-.289-.526-.533-.717-.848-.102-.169-.235-.41-.289-.849-.054-.457-.064-.818-.064-3.249v-.001L2 7.315c0-2.43.01-2.792.064-3.249.054-.438.187-.679.289-.848.191-.315.429-.56.717-.848.289-.289.533-.526.848-.717.169-.102.41-.235.289-.849.054-.457.064-.818.064-3.249v-.001L7.315 2h-.001zm-.001 1.442c-2.058 0-2.313.009-3.11.053-.32.04-.48.106-.59.178-.2.13-.333.267-.46.394-.127.127-.264.26-.394.46-.072.11-.138.27-.178.59-.044.797-.053 1.052-.053 3.11v.001l.001 4.686c0 2.058-.009 2.313-.053 3.11-.04.32-.106.48-.178.59-.13.2-.267.333-.394.46-.127.127-.26.26-.46.394-.11.072-.27.138-.59.178-.797.044-1.052.053-3.11.053h-.001L3.442 20.558c2.058 0 2.313-.009 3.11-.053.32-.04.48-.106.59-.178.2-.13.333-.267.46-.394.127-.127.26-.26.46-.394.11-.072.27-.138.59-.178.797-.044 1.052-.053 3.11-.053h.001L20.558 3.442zM12 7.315a4.685 4.685 0 100 9.37 4.685 4.685 0 000-9.37zm0 1.442a3.243 3.243 0 110 6.486 3.243 3.243 0 010-6.486zM18.5 5.815a1.285 1.285 0 100 2.57 1.285 1.285 0 000-2.57z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <a href="/gallery" class="btn btn-secondary px-8 py-3">
        view all styles
      </a>
    </div>
  </div>
</section>
