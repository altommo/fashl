@extends('layouts.app')

@section('content')
  @include('partials.hero-banner')
  @include('partials.featured-capsule-carousel')
  @include('partials.ugc-gallery-preview')
  @include('partials.newsletter-living-report-teaser')

  {{-- The homepage displays marketing sections only; default posts are hidden. --}}
@endsection

