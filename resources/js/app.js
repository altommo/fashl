import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

window.addEventListener('DOMContentLoaded', () => {
  // PWA Service Worker Registration
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/service-worker.js')
        .then(registration => {
          console.log('Service Worker registered with scope:', registration.scope);
        })
        .catch(error => {
          console.error('Service Worker registration failed:', error);
        });
    });
  }

  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('translate-x-full'); // Toggle to slide from right
    });
  }

  if (mobileMenuCloseButton && mobileMenu) {
    mobileMenuCloseButton.addEventListener('click', () => {
      mobileMenu.classList.add('translate-x-full'); // Hide the menu
    });
  }

  // Mobile Filters Logic
  const mobileFilterOpenButton = document.getElementById('mobile-filter-open-button');
  const mobileFilterPanel = document.getElementById('mobile-filter-panel');
  const mobileFilterCloseButton = document.getElementById('mobile-filter-close-button');

  if (mobileFilterOpenButton && mobileFilterPanel) {
    mobileFilterOpenButton.addEventListener('click', () => {
      mobileFilterPanel.classList.remove('translate-x-full');
    });
  }

  if (mobileFilterCloseButton && mobileFilterPanel) {
    mobileFilterCloseButton.addEventListener('click', () => {
      mobileFilterPanel.classList.add('translate-x-full');
    });
  }

  // Filter Checklist Modal Logic
  const openFilterChecklistModalButton = document.getElementById('open-filter-checklist-modal');
  const filterChecklistModal = document.getElementById('filter-checklist-modal');
  const filterChecklistCloseButton = document.getElementById('filter-checklist-close-button');

  if (openFilterChecklistModalButton && filterChecklistModal) {
    openFilterChecklistModalButton.addEventListener('click', () => {
      filterChecklistModal.classList.remove('hidden');
    });
  }

  if (filterChecklistCloseButton && filterChecklistModal) {
    filterChecklistCloseButton.addEventListener('click', () => {
      filterChecklistModal.classList.add('hidden');
    });
  }

  // Pre-Order Notification Dismissal Logic (now integrated into header)
  const dismissPreOrderNotificationButton = document.getElementById('dismiss-pre-order-notification');
  const preOrderNotificationBar = dismissPreOrderNotificationButton ? dismissPreOrderNotificationButton.closest('div') : null;

  if (dismissPreOrderNotificationButton && preOrderNotificationBar) {
    dismissPreOrderNotificationButton.addEventListener('click', () => {
      preOrderNotificationBar.classList.add('hidden');
    });
  }

  // Header scroll detection for styling (e.g., adding shadow on scroll)
  const mainHeader = document.getElementById('main-header');
  if (mainHeader) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) { // Adjust scroll threshold as needed
        mainHeader.classList.add('scrolled');
      } else {
        mainHeader.classList.remove('scrolled');
      }
    });
  }

  // Quick View Modal Logic
  const quickViewModal = document.getElementById('quickViewModal');
  const closeQuickViewButton = document.getElementById('closeQuickView');
  const quickViewMainImage = document.getElementById('quickViewMainImage');
  const quickViewTitle = document.getElementById('quickViewTitle');
  const quickViewDescription = document.getElementById('quickViewDescription');
  const quickViewPrice = document.getElementById('quickViewPrice');
  const quickViewThumbnailsContainer = document.getElementById('quickViewThumbnails');


  // Function to populate and show quick view modal
  const showQuickViewModal = (productData) => {
    if (quickViewMainImage) quickViewMainImage.src = productData.mainImage;
    if (quickViewTitle) quickViewTitle.textContent = productData.title;
    if (quickViewDescription) quickViewDescription.textContent = productData.description;
    if (quickViewPrice) quickViewPrice.textContent = productData.price;
    
    // Clear existing thumbnails
    if (quickViewThumbnailsContainer) {
      quickViewThumbnailsContainer.innerHTML = '';
      // Add new thumbnails
      productData.thumbnails.forEach(thumbnailUrl => {
        const img = document.createElement('img');
        img.src = thumbnailUrl;
        img.alt = productData.title + ' thumbnail';
        img.classList.add('w-20', 'h-24', 'object-cover', 'rounded-md', 'cursor-pointer', 'border-2', 'border-transparent', 'hover:border-fashl-sage', 'transition-colors');
        img.addEventListener('click', () => {
          quickViewMainImage.src = thumbnailUrl; // Change main image on thumbnail click
        });
        quickViewThumbnailsContainer.appendChild(img);
      });
    }

    if (quickViewModal) {
      quickViewModal.classList.remove('hidden');
    }
  };

  // Event listeners for quick view buttons
  document.querySelectorAll('.open-quick-view').forEach(button => {
    button.addEventListener('click', (event) => {
      event.preventDefault();
      const productData = {
        id: button.dataset.productId,
        title: button.dataset.productTitle,
        description: button.dataset.productDescription,
        price: button.dataset.productPrice,
        mainImage: button.dataset.productMainImage,
        thumbnails: JSON.parse(button.dataset.productThumbnails),
      };
      showQuickViewModal(productData);
    });
  });

  if (closeQuickViewButton && quickViewModal) {
    closeQuickViewButton.addEventListener('click', () => {
      quickViewModal.classList.add('hidden');
    });
  }

  // Search Autocomplete Logic
  const desktopSearchInput = document.getElementById('desktop-search-input');
  const searchSuggestionsContainer = document.getElementById('search-suggestions');

  // Debounce function
  const debounce = (func, delay) => {
    let timeout;
    return function(...args) {
      const context = this;
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(context, args), delay);
    };
  };

  const showSuggestions = (query) => {
    if (query.length > 2) { // Only show suggestions for queries longer than 2 characters
      console.log('Fetching suggestions for:', query);
      // Dummy suggestions for demonstration
      const dummySuggestions = [
        'midi wrap dress',
        'oversized knit sweater',
        'sustainable denim',
        'silk camisole',
        'leather ankle boots',
        'minimalist earrings',
        'classic leather clutch',
      ].filter(item => item.includes(query.toLowerCase()));

      searchSuggestionsContainer.innerHTML = ''; // Clear previous suggestions

      if (dummySuggestions.length > 0) {
        dummySuggestions.forEach(suggestion => {
          const suggestionItem = document.createElement('div');
          suggestionItem.classList.add('p-2', 'cursor-pointer', 'hover:bg-gray-100', 'text-fashl-black');
          suggestionItem.textContent = suggestion;
          suggestionItem.setAttribute('role', 'option');
          suggestionItem.addEventListener('click', () => {
            desktopSearchInput.value = suggestion;
            searchSuggestionsContainer.classList.add('hidden');
            desktopSearchInput.setAttribute('aria-expanded', 'false');
            // Optionally trigger a search here
          });
          searchSuggestionsContainer.appendChild(suggestionItem);
        });
        searchSuggestionsContainer.classList.remove('hidden');
        desktopSearchInput.setAttribute('aria-expanded', 'true');
      } else {
        searchSuggestionsContainer.classList.add('hidden');
        desktopSearchInput.setAttribute('aria-expanded', 'false');
      }
    } else {
      searchSuggestionsContainer.classList.add('hidden');
      desktopSearchInput.setAttribute('aria-expanded', 'false');
    }
  };

  if (desktopSearchInput) {
    desktopSearchInput.addEventListener('input', debounce((event) => {
      showSuggestions(event.target.value);
    }, 300));

    // Hide suggestions when clicking outside
    document.addEventListener('click', (event) => {
      if (!desktopSearchInput.contains(event.target) && !searchSuggestionsContainer.contains(event.target)) {
        searchSuggestionsContainer.classList.add('hidden');
        desktopSearchInput.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // Wishlist Logic
  const wishlistButtons = document.querySelectorAll('.js-add-to-wishlist');
  const wishlistCountSpan = document.getElementById('wishlist-count');
  let wishlistItems = new Set(); // Using a Set to store unique product IDs

  // Initialize wishlist count from local storage or 0
  if (localStorage.getItem('fashl_wishlist')) {
    wishlistItems = new Set(JSON.parse(localStorage.getItem('fashl_wishlist')));
  }
  if (wishlistCountSpan) {
    wishlistCountSpan.textContent = wishlistItems.size;
  }

  wishlistButtons.forEach(button => {
    const productId = button.dataset.productId;
    // Set initial state of button if product is already in wishlist
    if (wishlistItems.has(productId)) {
      button.classList.add('is-liked');
    }

    button.addEventListener('click', (event) => {
      event.preventDefault();
      
      if (wishlistItems.has(productId)) {
        // Remove from wishlist
        wishlistItems.delete(productId);
        button.classList.remove('is-liked');
      } else {
        // Add to wishlist
        wishlistItems.add(productId);
        button.classList.add('is-liked');
      }
      
      // Update count and local storage
      if (wishlistCountSpan) {
        wishlistCountSpan.textContent = wishlistItems.size;
      }
      localStorage.setItem('fashl_wishlist', JSON.stringify(Array.from(wishlistItems)));
    });
  });

  // Hero Tagline Typing Animation
  const heroTaglineElement = document.getElementById('hero-tagline');
  const taglines = [
    "thoughtfully designed pieces for the modern woman",
    "sustainable fashion that moves with your life",
    "curated capsule collections for every season"
  ];
  let taglineIndex = 0;
  let charIndex = 0;
  let isDeleting = false;
  const typingSpeed = 50; // milliseconds per character
  const deletingSpeed = 30; // milliseconds per character
  const delayBetweenTaglines = 1500; // milliseconds

  function typeWriter() {
    const currentTagline = taglines[taglineIndex];
    if (isDeleting) {
      heroTaglineElement.textContent = currentTagline.substring(0, charIndex - 1);
      charIndex--;
    } else {
      heroTaglineElement.textContent = currentTagline.substring(0, charIndex + 1);
      charIndex++;
    }

    let currentSpeed = isDeleting ? deletingSpeed : typingSpeed;

    if (!isDeleting && charIndex === currentTagline.length) {
      currentSpeed = delayBetweenTaglines;
      isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false;
      taglineIndex = (taglineIndex + 1) % taglines.length;
      currentSpeed = typingSpeed;
    }

    setTimeout(typeWriter, currentSpeed);
  }

  if (heroTaglineElement) {
    typeWriter();
  }

  // Size Recommendation Modal Logic
  const sizeRecommendationModal = document.getElementById('sizeRecommendationModal');
  const openSizeRecommendationModalButton = document.getElementById('open-size-recommendation-modal');
  const closeSizeRecommendationModalButton = document.getElementById('close-size-recommendation-modal');
  const sizeRecommendationResult = document.getElementById('size-recommendation-result');
  const sizeRecommendationForm = sizeRecommendationModal ? sizeRecommendationModal.querySelector('form') : null;

  if (openSizeRecommendationModalButton && sizeRecommendationModal) {
    openSizeRecommendationModalButton.addEventListener('click', () => {
      sizeRecommendationModal.classList.remove('hidden');
      if (sizeRecommendationResult) sizeRecommendationResult.classList.add('hidden'); // Hide previous results
    });
  }

  if (closeSizeRecommendationModalButton && sizeRecommendationModal) {
    closeSizeRecommendationModalButton.addEventListener('click', () => {
      sizeRecommendationModal.classList.add('hidden');
    });
  }

  if (sizeRecommendationForm) {
    sizeRecommendationForm.addEventListener('submit', (event) => {
      event.preventDefault();
      // In a real application, you'd send measurements to a backend AI service
      // For demonstration, just show a dummy result
      if (sizeRecommendationResult) {
        sizeRecommendationResult.classList.remove('hidden');
      }
    });
  }
});
