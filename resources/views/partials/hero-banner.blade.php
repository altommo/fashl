<section class="relative h-screen flex items-center justify-center text-center overflow-hidden">
  <div class="absolute inset-0">
    <video autoplay muted loop class="w-full h-full object-cover">
      <source src="@asset('videos/hero-lifestyle.mp4')" type="video/mp4"> {{-- Placeholder video --}}
    </video>
    {{-- Fallback image --}}
    <img src="@asset('images/hero-fallback.jpg')" alt="FASHL Collection" class="w-full h-full object-cover">
  </div>
  
  <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/40"></div>
  
  <div class="relative z-10 max-w-4xl mx-auto px-4">
    <h1 class="font-montserrat text-5xl md:text-7xl lg:text-8xl font-bold lowercase text-white leading-tight mb-6 animate-fade-in-up">
      discover your new season staples
    </h1>
    <p id="hero-tagline" class="text-xl md:text-2xl text-white/90 mb-12 max-w-2xl mx-auto font-light">
      {{-- Tagline will be typed by JavaScript --}}
    </p>
    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-fade-in-up" style="animation-delay: 0.4s;">
      <a href="/shop" class="btn btn-primary text-lg px-12 py-4 bg-white text-black hover:bg-gray-100">
        shop the collection
      </a>
      <a href="/about" class="text-white hover:text-gray-200 underline font-medium">
        discover our story
      </a>
    </div>
  </div>
  
  {{-- Scroll indicator --}}
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
    <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
      <div class="w-1 h-3 bg-white rounded-full mt-2"></div>
    </div>
  </div>
</section>
