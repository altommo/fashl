@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">our journal</h1>

    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      {{-- Loop through example blog post cards --}}
      @for ($i = 0; $i < 6; $i++)
        @include('partials.blog-post-card', [
          'title' => 'the art of conscious consumption ' . ($i + 1),
          'excerpt' => 'discover how to build a sustainable wardrobe that lasts, focusing on quality over quantity and ethical sourcing.',
          'image' => 'https://via.placeholder.com/600x400/F9F6F1/1A1A1A?text=Blog+Post+' . ($i + 1),
          'link' => '#',
        ])
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
  </div>
@endsection
