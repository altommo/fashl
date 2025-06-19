@extends('layouts.app')

@section('content')
  <div class="flex justify-between items-center mb-8">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black text-center lg:text-left">shop all</h1>
    <button id="mobile-filter-open-button" class="lg:hidden btn btn-secondary px-4 py-2">
      filters
      <svg class="w-4 h-4 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01.293.707V19a1 1 0 01-1 1H4a1 1 0 01-1-1V7.293a1 1 0 01.293-.707L3 4z"></path>
      </svg>
    </button>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
    {{-- Loop through example product cards --}}
    @php
      $productImages = [
        ['primary' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80'],
        ['primary' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
        ['primary' => 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
        ['primary' => 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
        ['primary' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&h=800&fit=crop&auto=format&q=80', 'hover' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&h=800&fit=crop&auto=format&q=80&sat=-100'],
      ];
    @endphp
    @for ($i = 0; $i < 9; $i++)
      <x-product-card
        title="product name {{ $i + 1 }}"
        description="a timeless piece"
        price="£{{ rand(20, 100) }}.00"
        primaryImage="{{ $productImages[$i % count($productImages)]['primary'] }}"
        hoverImage="{{ $productImages[$i % count($productImages)]['hover'] }}"
        link="#"
        @if ($i % 3 == 0) isNew @endif
      />
    @endfor
  </div>

  {{-- Pagination (placeholder) --}}
  <div class="mt-12 flex justify-center">
    <nav class="flex space-x-2">
      <a href="#" class="px-4 py-2 border border-fashl-black rounded-md hover:bg-fashl-black hover:text-fashl-white">1</a>
      <a href="#" class="px-4 py-2 border border-fashl-black rounded-md hover:bg-fashl-black hover:text-fashl-white">2</a>
      <a href="#" class="px-4 py-2 border border-fashl-black rounded-md hover:bg-fashl-black hover:text-fashl-white">3</a>
      <span class="px-4 py-2">...</span>
      <a href="#" class="px-4 py-2 border border-fashl-black rounded-md hover:bg-fashl-black hover:text-fashl-white">Next &raquo;</a>
    </nav>
  </div>

  @include('partials.shop-filters-mobile')
@endsection

@section('sidebar')
  @include('partials.shop-filters')
@endsection
