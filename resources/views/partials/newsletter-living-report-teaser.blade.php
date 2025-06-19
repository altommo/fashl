<section class="py-16 bg-gradient-to-r from-fashl-sage to-fashl-black text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="font-montserrat text-4xl font-bold lowercase mb-6">
      join the fashl family
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
      get exclusive access to new drops, styling tips, and member-only perks
    </p>
    
    <form class="max-w-md mx-auto flex gap-4" action="/newsletter/subscribe" method="POST">
      @csrf
      <input 
        type="email" 
        name="email"
        placeholder="enter your email"
        required
        class="flex-1 px-6 py-4 rounded-full text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white"
      >
      <button 
        type="submit"
        class="bg-white text-fashl-black px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-colors whitespace-nowrap"
      >
        join now
      </button>
    </form>
    
    <p class="text-sm mt-4 opacity-75">
      get 10% off your first order • unsubscribe anytime
    </p>
  </div>
</section>
