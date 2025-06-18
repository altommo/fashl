@extends('layouts.app')

@section('content')
  <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center lg:text-left">shop all</h1>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
    {{-- Loop through example product cards --}}
    @for ($i = 0; $i < 9; $i++)
      <x-product-card
        title="product name {{ $i + 1 }}"
        description="a timeless piece"
        price="£{{ rand(20, 100) }}.00"
        image="https://via.placeholder.com/400x500/F5F5F5/1A1A1A?text=Product+{{ $i + 1 }}"
        link="#"
        @if ($i % 3 == 0) badge="new" @endif
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
@endsection

@section('sidebar')
  @include('partials.shop-filters')
@endsection
