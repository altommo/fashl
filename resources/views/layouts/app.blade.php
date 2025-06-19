<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- Critical CSS inlined -->
    <style>
      /* Critical above-the-fold styles */
      .btn{display:inline-block;padding:0.75rem 1.5rem;border-radius:0.375rem;text-align:center;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;-webkit-transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-timing-function:cubic-bezier(0.4,0,0.2,1);-webkit-transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:200ms;font-family:'Inter',sans-serif;font-weight:600;font-size:0.875rem;text-transform:uppercase;letter-spacing:0.05em;}
      .btn-primary{background-color:#1A1A1A;color:#FEFCF7;}
      .btn-primary:hover{background-color:#374151;}
      .btn-secondary{background-color:transparent;color:#1A1A1A;border-width:2px;border-color:#1A1A1A;}
      .btn-secondary:hover{background-color:#1A1A1A;color:#FEFCF7;}
      .btn-accent{background-color:#9CAF88;color:#FEFCF7;}
      .btn-accent:hover{background-color:#7A9B6B;}
    </style>
    
    <!-- Defer non-critical CSS -->
    <link rel="preload" href="@vite('resources/css/app.css')" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="@vite('resources/css/app.css')"></noscript>
    @vite(['resources/js/app.js'])

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Sustainable fashion for the modern woman. Shop curated capsule collections at FASHL.')">
    <meta name="keywords" content="sustainable fashion, women's clothing, capsule wardrobe, ethical fashion">
    
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('page_title', 'FASHL - Sustainable Fashion')">
    <meta property="og:description" content="@yield('meta_description', 'Sustainable fashion for the modern woman.')">
    <meta property="og:image" content="@asset('images/og-image.jpg')">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Schema.org markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ClothingStore",
      "name": "FASHL",
      "description": "Sustainable fashion for the modern woman",
      "url": "{{ home_url() }}"
    }
    </script>
  </head>

  <body @php(body_class()) class="font-inter text-fashl-black">
    @php(wp_body_open())

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

    @include('partials.quick-view-modal')
  </body>
</html>
