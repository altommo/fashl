<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Inter:wght@400;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body @php(body_class()) class="font-inter text-fashl-black">
    @php(wp_body_open())

    @include('partials.pre-order-notification')

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      @include('sections.header')

      {{-- Main content area, including potential sidebar --}}
      <div class="container mx-auto px-4 pt-28 grid grid-cols-1 lg:grid-cols-4 lg:gap-8">
        <main id="main" class="main lg:col-span-3">
          @yield('content')
        </main>

        @hasSection('sidebar')
          <aside class="sidebar lg:col-span-1">
            @yield('sidebar')
          </aside>
        @endif
      </div>

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
