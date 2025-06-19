<header id="main-header" class="fixed top-0 w-full z-50 bg-fashl-white/95 backdrop-blur-sm shadow-sm transition-all duration-300">
  {{-- Pre-order notification bar --}}
  <div class="bg-fashl-sage text-white text-center py-2 text-sm font-medium">
    <span class="inline-flex items-center gap-2">
      ⏰ pre-order now and receive your order in 10-14 business days
      <button id="dismiss-pre-order-notification" class="ml-4 hover:text-gray-200" aria-label="Dismiss notification">✕</button>
    </span>
  </div>
  
  <div class="container mx-auto px-4 py-4">
    <div class="flex items-center justify-between">
      {{-- Logo --}}
      <a href="{{ home_url('/') }}" class="font-montserrat text-2xl font-bold lowercase text-fashl-black">
        fashl
      </a>
      
      {{-- Search Bar (Desktop) --}}
      <div class="hidden lg:flex flex-1 max-w-md mx-8 relative">
        <div class="relative w-full">
          <input 
            type="search" 
            placeholder="search products..."
            id="desktop-search-input"
            class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-fashl-sage focus:border-transparent"
            aria-controls="search-suggestions"
            aria-expanded="false"
          >
          <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        {{-- Search Suggestions Dropdown --}}
        <div id="search-suggestions" class="absolute top-full left-0 w-full bg-white border border-gray-200 rounded-md shadow-lg mt-1 z-50 hidden" role="listbox">
          {{-- Suggestions will be dynamically inserted here --}}
        </div>
      </div>
      
      {{-- Navigation & Actions --}}
      <div class="flex items-center space-x-6">
        @if (has_nav_menu('primary_navigation'))
          <nav class="hidden lg:flex space-x-8">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-8 font-medium text-fashl-black', 'echo' => false, 'container' => false]) !!}
          </nav>
        @endif
        
        <div class="flex items-center space-x-4">
          {{-- Language/Currency Selector --}}
          <div class="relative group">
            <button class="p-2 hover:text-fashl-sage transition-colors flex items-center text-sm" aria-label="Select Language and Currency">
              USD / EN
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">USD / EN</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">EUR / FR</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">GBP / EN</a>
            </div>
          </div>

          <button class="p-2 hover:text-fashl-sage transition-colors" aria-label="Search">
            <svg class="w-5 h-5 lg:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </button>
          
          <button class="p-2 hover:text-fashl-sage transition-colors" aria-label="Account">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
          </button>

          {{-- Wishlist Icon --}}
          <a href="/wishlist" class="relative p-2 hover:text-fashl-sage transition-colors" aria-label="Wishlist">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <span id="wishlist-count" class="absolute -top-1 -right-1 bg-fashl-sage text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
          </a>
          
          <button class="relative p-2 hover:text-fashl-sage transition-colors" aria-label="Cart">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5L17 18"></path>
            </svg>
            <span class="absolute -top-1 -right-1 bg-fashl-sage text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
          </button>
          
          <button id="mobile-menu-button" class="lg:hidden p-2" aria-label="Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- Mobile Menu Drawer --}}
  @if (has_nav_menu('primary_navigation'))
    <nav id="mobile-menu" class="lg:hidden fixed inset-0 bg-fashl-cream z-40 transform translate-x-full transition-transform duration-300 ease-in-out">
      <div class="flex flex-col h-full">
        <div class="flex items-center justify-between p-4 border-b border-fashl-gray">
          <span class="font-montserrat text-xl font-bold lowercase">menu</span>
          <button id="mobile-menu-close-button" class="p-2 text-fashl-black" aria-label="Close menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        
        <div class="flex-1 overflow-y-auto p-4">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex flex-col space-y-6 text-2xl font-montserrat lowercase text-fashl-black', 'echo' => false, 'container' => false]) !!}
        </div>
        
        <div class="p-4 border-t border-fashl-gray">
          <a href="/cart" class="btn btn-primary w-full font-montserrat text-2xl lowercase">
            view cart (0)
          </a>
        </div>
      </div>
    </nav>
  @endif
</header>
