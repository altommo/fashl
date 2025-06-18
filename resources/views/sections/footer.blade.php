<footer class="bg-fashl-black text-fashl-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 pb-8 border-b border-fashl-gray/20">
      {{-- Column 1: Shop --}}
      <div>
        <h3 class="font-montserrat text-lg font-bold lowercase mb-4">shop</h3>
        <ul class="space-y-2 font-inter text-sm">
          <li><a href="#" class="hover:text-fashl-sage">new arrivals</a></li>
          <li><a href="#" class="hover:text-fashl-sage">dresses</a></li>
          <li><a href="#" class="hover:text-fashl-sage">tops</a></li>
          <li><a href="#" class="hover:text-fashl-sage">bottoms</a></li>
          <li><a href="#" class="hover:text-fashl-sage">accessories</a></li>
          <li><a href="#" class="hover:text-fashl-sage">sale</a></li>
        </ul>
      </div>

      {{-- Column 2: About --}}
      <div>
        <h3 class="font-montserrat text-lg font-bold lowercase mb-4">about</h3>
        <ul class="space-y-2 font-inter text-sm">
          <li><a href="#" class="hover:text-fashl-sage">our story</a></li>
          <li><a href="#" class="hover:text-fashl-sage">blog</a></li>
          <li><a href="#" class="hover:text-fashl-sage">careers</a></li>
        </ul>
      </div>

      {{-- Column 3: Support --}}
      <div>
        <h3 class="font-montserrat text-lg font-bold lowercase mb-4">support</h3>
        <ul class="space-y-2 font-inter text-sm">
          <li><a href="#" class="hover:text-fashl-sage">contact us</a></li>
          <li><a href="#" class="hover:text-fashl-sage">faq</a></li>
          <li><a href="#" class="hover:text-fashl-sage">returns & exchanges</a></li>
          <li><a href="#" class="hover:text-fashl-sage">shipping</a></li>
        </ul>
      </div>

      {{-- Column 4: Social & Newsletter --}}
      <div>
        <h3 class="font-montserrat text-lg font-bold lowercase mb-4">stay connected</h3>
        <div class="flex space-x-4 mb-6">
          {{-- Social Icons (placeholders) --}}
          <a href="#" class="text-xl hover:text-fashl-sage" aria-label="Instagram">📸</a>
          <a href="#" class="text-xl hover:text-fashl-sage" aria-label="Facebook">👍</a>
          <a href="#" class="text-xl hover:text-fashl-sage" aria-label="Pinterest">📌</a>
        </div>

        <h3 class="font-montserrat text-lg font-bold lowercase mb-4">newsletter</h3>
        <form class="flex space-x-2">
          <input
            type="email"
            placeholder="enter your email"
            aria-label="Enter your email for newsletter"
            required
            class="flex-grow p-2 bg-fashl-gray text-fashl-black border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage placeholder:lowercase"
          >
          <button
            type="submit"
            class="bg-fashl-sage text-fashl-white px-4 py-2 rounded-md font-inter text-sm uppercase font-semibold hover:bg-fashl-sage/80 transition-colors duration-200"
          >
            sign up
          </button>
        </form>
      </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="flex flex-col md:flex-row justify-between items-center pt-8 text-sm font-inter text-fashl-gray">
      <p>&copy; {{ date('Y') }} fashl. all rights reserved.</p>
      <ul class="flex space-x-4 mt-4 md:mt-0">
        <li><a href="#" class="hover:text-fashl-sage">terms of service</a></li>
        <li><a href="#" class="hover:text-fashl-sage">privacy policy</a></li>
      </ul>
    </div>
  </div>
</footer>
