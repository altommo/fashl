<header class="fixed top-0 w-full z-50 bg-white shadow">
  <div class="container mx-auto flex items-center justify-between p-4">
    <a href="{{ home_url('/') }}" class="flex items-center">
      <img src="@asset('images/logo.svg')" alt="{{ $siteName }}" class="max-h-10" />
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="hidden lg:flex space-x-6" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-6', 'echo' => false, 'container' => false]) !!}
      </nav>
    @endif

    <button id="mobile-menu-button" class="lg:hidden p-2" aria-label="Open menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  @if (has_nav_menu('primary_navigation'))
    <nav id="mobile-menu" class="lg:hidden fixed inset-x-0 top-full bg-white shadow p-4 transform translate-x-full transition-transform" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex flex-col space-y-4', 'echo' => false, 'container' => false]) !!}
    </nav>
  @endif
</header>
