@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">our living report</h1>

    <div class="max-w-5xl mx-auto bg-fashl-cream p-6 rounded-lg shadow-md">
      {{-- Embedded Google Data Studio / Custom Charts (Placeholder) --}}
      <div class="mb-8">
        <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">environmental impact dashboard</h2>
        <div class="relative w-full" style="padding-top: 56.25%;"> {{-- 16:9 Aspect Ratio --}}
          <iframe
            src="https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0" {{-- Placeholder for an embedded report/video --}}
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            class="absolute top-0 left-0 w-full h-full rounded-lg"
            title="Fashl Living Report Dashboard"
          ></iframe>
        </div>
        <p class="font-inter text-sm text-gray-600 mt-4 text-center">
          *This is a placeholder for our live environmental impact dashboard.
        </p>
      </div>

      {{-- Latest Research Summary --}}
      <div>
        <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">latest research summary</h2>
        <div class="font-inter text-fashl-black space-y-4">
          <p>
            At Fashl, we are committed to transparency and continuous improvement in our sustainability efforts. Our latest research focuses on reducing water consumption in our dyeing processes and exploring innovative, low-impact materials.
          </p>
          <p>
            We've successfully piloted a new dyeing technique that reduces water usage by 30% compared to traditional methods, and we are working towards scaling this across our supply chain. Furthermore, our material science team is actively researching alternatives to conventional cotton, with promising results from organic hemp and recycled polyester blends.
          </p>
          <p>
            Our goal is to not only minimise our environmental footprint but also to contribute positively to the fashion industry's shift towards more sustainable practices. We believe in sharing our journey, including our challenges and successes, to foster a more informed and responsible community.
          </p>
          <p class="text-sm text-gray-600">
            For detailed data and methodology, please refer to the full report embedded above.
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
