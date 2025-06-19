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

  <div id="product-grid-container" class="grid grid-cols-2 md:grid-cols-3 gap-6">
    {{-- Products will be dynamically inserted here by JavaScript --}}
  </div>

  <div id="product-pagination-container" class="mt-12 flex justify-center">
    {{-- Pagination will be dynamically inserted here by JavaScript --}}
  </div>

  @include('partials.shop-filters-mobile')
@endsection

@section('sidebar')
  @include('partials.shop-filters')
@endsection
