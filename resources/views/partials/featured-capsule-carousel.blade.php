<section class="py-12 bg-fashl-cream">
  <div class="container mx-auto px-4">
    <h2 class="font-montserrat text-3xl font-bold lowercase text-fashl-black mb-8 text-center">
      featured capsules
    </h2>

    <div class="flex overflow-x-auto space-x-6 pb-4 scrollbar-hide lg:justify-center">
      {{-- Example Product Cards --}}
      <div class="flex-shrink-0 w-64">
        <x-product-card
          title="the midi wrap dress"
          description="effortless elegance"
          price="£42.00"
          image="https://via.placeholder.com/400x500/F5F5F5/1A1A1A?text=Midi+Wrap+Dress"
          link="#"
          badge="limited"
        />
      </div>
      <div class="flex-shrink-0 w-64">
        <x-product-card
          title="oversized knit sweater"
          description="cozy comfort"
          price="£55.00"
          image="https://via.placeholder.com/400x500/F5F5F5/1A1A1A?text=Knit+Sweater"
          link="#"
        />
      </div>
      <div class="flex-shrink-0 w-64">
        <x-product-card
          title="high-waisted denim"
          description="classic fit"
          price="£38.00"
          image="https://via.placeholder.com/400x500/F5F5F5/1A1A1A?text=Denim"
          link="#"
        />
      </div>
      <div class="flex-shrink-0 w-64">
        <x-product-card
          title="silk camisole"
          description="luxurious feel"
          price="£29.00"
          image="https://via.placeholder.com/400x500/F5F5F5/1A1A1A?text=Silk+Camisole"
          link="#"
          badge="new"
        />
      </div>
      <div class="flex-shrink-0 w-64">
        <x-product-card
          title="leather ankle boots"
          description="versatile style"
          price="£75.00"
          image="https://via.placeholder.com/400x500/F5F5F5/1A1A1A?text=Ankle+Boots"
          link="#"
        />
      </div>
    </div>
  </div>
</section>
