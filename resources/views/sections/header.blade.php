 <header id="main-header" class="fixed top-12 w-full z-50 bg-fashl-white shadow-sm">
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
    <nav id="mobile-menu" class="lg:hidden fixed inset-x-0 top-0 h-screen bg-fashl-cream z-40 transform -translate-y-full transition-transform duration-300 ease-in-out flex flex-col items-center justify-center">
      <button id="mobile-menu-close-button" class="absolute top-4 right-4 p-2 text-fashl-black" aria-label="Close menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex flex-col space-y-6 text-2xl font-montserrat lowercase text-fashl-black', 'echo' => false, 'container' => false]) !!}
      {{-- Add cart link for mobile --}}
      <a href="/cart" class="font-montserrat text-2xl lowercase text-fashl-black mt-6 hover:text-fashl-sage">cart</a>
    </nav>
  @endif
</header>
