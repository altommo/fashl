<section class="py-12 bg-fashl-cream">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
      {{-- Left Column: Newsletter Signup --}}
      <div class="text-center lg:text-left">
        <h2 class="font-montserrat text-3xl font-bold lowercase text-fashl-black mb-4">
          join the fashl family
        </h2>
        <p class="font-inter text-base text-fashl-black mb-6 max-w-md mx-auto lg:mx-0">
          sign up for exclusive offers, new arrivals, and a peek behind the scenes.
        </p>
        <form class="flex flex-col sm:flex-row gap-4 sm:gap-2 max-w-md mx-auto lg:mx-0">
          <input
            type="email"
            placeholder="enter your email"
            aria-label="Enter your email for newsletter"
            required
            class="flex-grow p-3 bg-fashl-white text-fashl-black border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage placeholder:lowercase"
          >
          <button
            type="submit"
            class="btn btn-primary px-6 py-3"
          >
            sign up
          </button>
        </form>
      </div>

      {{-- Right Column: Living Report Teaser --}}
      <div class="relative bg-fashl-gray rounded-lg overflow-hidden shadow-md">
        <a href="/living-report" class="block group">
          <img
            src="https://via.placeholder.com/800x450/F5F5F5/1A1A1A?text=Living+Report+Teaser"
            alt="Living Report Teaser Image"
            class="w-full h-auto object-cover transition-transform duration-300 group-hover:scale-105"
          >
          <div class="absolute inset-0 bg-fashl-black opacity-30 group-hover:opacity-40 transition-opacity duration-300"></div>
          <div class="absolute inset-0 flex flex-col items-center justify-center p-4 text-center">
            <h3 class="font-montserrat text-2xl font-bold lowercase text-fashl-white mb-2 leading-tight">
              our living report
            </h3>
            <p class="font-inter text-base text-fashl-white mb-4">
              transparency in every thread.
            </p>
            <span class="btn btn-secondary !text-fashl-white !border-fashl-white hover:!bg-fashl-white hover:!text-fashl-black">
              read the report
            </span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
