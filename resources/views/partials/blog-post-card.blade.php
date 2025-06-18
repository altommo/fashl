<div class="blog-post-card bg-fashl-cream rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
  <a href="{{ $link ?? '#' }}">
    <img
      src="{{ $image ?? 'https://via.placeholder.com/600x400/F5F5F5/1A1A1A?text=Blog+Post+Image' }}"
      alt="{{ $title ?? 'Blog Post' }}"
      class="w-full h-48 object-cover"
      loading="lazy"
    >
  </a>
  <div class="p-4">
    <h3 class="font-montserrat text-xl font-bold lowercase text-fashl-black leading-tight mb-2">
      <a href="{{ $link ?? '#' }}" class="hover:text-fashl-sage">{{ $title ?? 'Blog Post Title' }}</a>
    </h3>
    <p class="font-inter text-sm text-gray-600 mb-3">
      {{ $date ?? 'October 26, 2023' }} by {{ $author ?? 'Fashl Team' }}
    </p>
    <p class="font-inter text-base text-fashl-black mb-4">
      {{ $excerpt ?? 'A short summary of the blog post content, enticing the reader to click and learn more about the topic discussed.' }}
    </p>
    <a href="{{ $link ?? '#' }}" class="btn btn-secondary px-4 py-2">read more</a>
  </div>
</div>
