 <header id="main-header" class="fixed top-0 w-full z-50 bg-fashl-white/90 backdrop-blur-sm shadow-sm transition-all duration-300">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    {{-- Logo --}}
    <a href="{{ home_url('/') }}" class="flex items-center">
      <img src="@asset('images/logo.svg')" alt="{{ $siteName }}" class="max-h-10" />
    </a>

    {{-- Main Navigation (Desktop) --}}
    @if (has_nav_menu('primary_navigation'))
      <nav class="hidden lg:flex space-x-6 font-inter text-base lowercase text-fashl-black" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-6', 'echo' => false, 'container' => false]) !!}
      </nav>
    @endif

    {{-- Cart Icon & Mobile Menu Toggle --}}
    <div class="flex items-center space-x-4">
      {{-- Cart Icon (Desktop) --}}
      <a href="/cart" class="hidden lg:block text-xl text-fashl-black" aria-label="View cart">🛒</a>

      {{-- Mobile Menu Toggle (Hamburger) --}}
      <button id="mobile-menu-button" class="lg:hidden p-2 text-fashl-black" aria-label="Open menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
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
