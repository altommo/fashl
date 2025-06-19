<section class="py-16 bg-fashl-white">
  <div class="container mx-auto px-4">
    <h2 class="font-montserrat text-3xl font-bold lowercase text-fashl-black text-center mb-12">
      recommended for you
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @php
        $recommendedProducts = [
          ['title' => 'flowy linen trousers', 'price' => '£60.00', 'primaryImage' => 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80', 'hoverImage' => 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
          ['title' => 'classic white tee', 'price' => '£25.00', 'primaryImage' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80', 'hoverImage' => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
          ['title' => 'minimalist tote bag', 'price' => '£75.00', 'primaryImage' => 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=600&h=800&fit=crop&auto=format&q=80', 'hoverImage' => 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
          ['title' => 'oversized blazer', 'price' => '£90.00', 'primaryImage' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80', 'hoverImage' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
        ];
      @endphp
      @foreach($recommendedProducts as $product)
        <x-product-card
          title="{{ $product['title'] }}"
          price="{{ $product['price'] }}"
          primaryImage="{{ $product['primaryImage'] }}"
          hoverImage="{{ $product['hoverImage'] }}"
          description="a perfect match for your style"
        />
      @endforeach
    </div>
  </div>
</section>
