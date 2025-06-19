<section class="py-16 bg-fashl-cream">
  <div class="container mx-auto px-4">
    <h2 class="font-montserrat text-3xl font-bold lowercase text-fashl-black text-center mb-12">
      featured capsules
    </h2>
    <div class="overflow-x-auto">
      <div class="flex space-x-6 pb-4">
        @php
          $productImages = [
            ['primary' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80'],
            ['primary' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
            ['primary' => 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
            ['primary' => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
          ];
        @endphp
        @for($i = 0; $i < 4; $i++)
        <div class="flex-shrink-0 w-80">
          <x-product-card
            title="capsule {{ $i + 1 }}"
            price="£45"
            primaryImage="{{ $productImages[$i]['primary'] }}"
            hoverImage="{{ $productImages[$i]['hover'] }}"
            @if($i == 0) isNew @endif
          />
        </div>
        @endfor
      </div>
    </div>
  </div>
</section>
