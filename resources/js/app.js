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
  const recommendedSizeSpan = sizeRecommendationResult ? sizeRecommendationResult.querySelector('span') : null;

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
      // Get form values
      const height = document.getElementById('height').value;
      const bust = document.getElementById('bust').value;
      const waist = document.getElementById('waist').value;
      const hips = document.getElementById('hips').value;

      let recommendedSize = 'M'; // Default recommendation

      // Simple dummy logic for demonstration
      if (height < 160 || bust < 85) {
        recommendedSize = 'S';
      } else if (height > 175 || bust > 95) {
        recommendedSize = 'L';
      }

      if (recommendedSizeSpan) {
        recommendedSizeSpan.textContent = recommendedSize;
      }
      
      if (sizeRecommendationResult) {
        sizeRecommendationResult.classList.remove('hidden');
      }
    });
  }

  // Cart Logic
  const cartCountSpan = document.querySelector('#main-header .relative .h-5.w-5'); // Select the cart count span in the header
  let cartItems = JSON.parse(localStorage.getItem('fashl_cart')) || [];

  const updateCartCount = () => {
    const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
    if (cartCountSpan) {
      cartCountSpan.textContent = totalItems;
    }
    // Update mobile menu cart count as well
    const mobileCartCount = document.querySelector('#mobile-menu .btn-primary');
    if (mobileCartCount) {
      mobileCartCount.textContent = `view cart (${totalItems})`;
    }
  };

  const saveCart = () => {
    localStorage.setItem('fashl_cart', JSON.stringify(cartItems));
    updateCartCount();
  };

  const addToCart = (product, quantity = 1, size = null) => {
    const existingItem = cartItems.find(item => item.id === product.id && item.size === size);
    if (existingItem) {
      existingItem.quantity += quantity;
    } else {
      cartItems.push({ ...product, quantity: quantity, size: size });
    }
    saveCart();
    console.log('Cart updated:', cartItems);
  };

  const removeFromCart = (productId, size = null) => {
    cartItems = cartItems.filter(item => !(item.id === productId && (size === null || item.size === size)));
    saveCart();
    console.log('Item removed from cart:', cartItems);
    renderCartPage(); // Re-render cart page if on it
  };

  const updateCartItemQuantity = (productId, newQuantity, size = null) => {
    const item = cartItems.find(item => item.id === productId && (size === null || item.size === size));
    if (item) {
      item.quantity = parseInt(newQuantity, 10);
      if (item.quantity <= 0) {
        removeFromCart(productId, size);
      } else {
        saveCart();
      }
    }
    console.log('Quantity updated:', cartItems);
    renderCartPage(); // Re-render cart page if on it
  };

  // Event listeners for "Add to Cart" buttons on product cards (grid/carousel)
  document.querySelectorAll('.js-add-to-cart').forEach(button => {
    button.addEventListener('click', (event) => {
      event.preventDefault();
      const product = {
        id: button.dataset.productId,
        title: button.dataset.productTitle,
        price: parseFloat(button.dataset.productPrice.replace('£', '')),
        image: button.dataset.productImage,
      };
      addToCart(product); // Default quantity 1, no size
    });
  });

  // Event listener for "Add to Cart" button on Product Detail Page
  const pdpAddToCartButton = document.getElementById('pdp-add-to-cart-button');
  if (pdpAddToCartButton) {
    pdpAddToCartButton.addEventListener('click', (event) => {
      event.preventDefault();
      const productId = pdpAddToCartButton.dataset.productId;
      const productTitle = pdpAddToCartButton.dataset.productTitle;
      const productPrice = parseFloat(pdpAddToCartButton.dataset.productPrice);
      const productImage = pdpAddToCartButton.dataset.productImage;
      const quantity = parseInt(document.getElementById('pdp-quantity').value, 10);
      const selectedSizeElement = document.querySelector('input[name="pdp_size"]:checked');
      const selectedSize = selectedSizeElement ? selectedSizeElement.value : null;

      if (quantity > 0 && selectedSize) {
        const product = {
          id: productId,
          title: productTitle,
          price: productPrice,
          image: productImage,
        };
        addToCart(product, quantity, selectedSize);
      } else {
        alert('Please select a size and quantity.');
      }
    });
  }


  // Render Cart Page (if on cart page)
  const cartItemsContainer = document.getElementById('cart-items-container');
  const cartSubtotalSpan = document.getElementById('cart-subtotal');
  const cartTotalSpan = document.getElementById('cart-total');
  const cartShippingSpan = document.getElementById('cart-shipping');
  const cartEmptyMessage = document.getElementById('cart-empty-message');
  const cartSummarySection = document.getElementById('cart-summary-section');

  const renderCartPage = () => {
    if (!cartItemsContainer) return; // Not on the cart page

    cartItemsContainer.innerHTML = ''; // Clear existing items
    let subtotal = 0;
    const shipping = 5.00; // Fixed shipping for now

    if (cartItems.length === 0) {
      if (cartEmptyMessage) cartEmptyMessage.classList.remove('hidden');
      if (cartSummarySection) cartSummarySection.classList.add('hidden');
      return;
    } else {
      if (cartEmptyMessage) cartEmptyMessage.classList.add('hidden');
      if (cartSummarySection) cartSummarySection.classList.remove('hidden');
    }

    cartItems.forEach(item => {
      const itemTotal = item.price * item.quantity;
      subtotal += itemTotal;

      const itemHtml = `
        <div class="flex items-center space-x-4 border-b border-fashl-gray pb-4 last:border-b-0 last:pb-0">
          <img src="${item.image}" alt="${item.title}" class="w-24 h-28 object-cover rounded-md">
          <div class="flex-grow">
            <h3 class="font-montserrat text-lg lowercase text-fashl-black leading-tight">${item.title}</h3>
            <p class="font-inter text-sm text-gray-600">Size: ${item.size || 'N/A'}</p>
            <p class="font-inter text-base font-semibold text-fashl-black mt-1">£${item.price.toFixed(2)}</p>
          </div>
          <div class="flex flex-col items-end space-y-2">
            <input
              type="number"
              min="1"
              value="${item.quantity}"
              class="w-16 p-2 border border-fashl-gray rounded-md text-center text-fashl-black focus:outline-none focus:ring-2 focus:ring-fashl-sage js-cart-quantity"
              data-product-id="${item.id}"
              data-product-size="${item.size || ''}"
            >
            <button class="font-inter text-sm text-red-600 hover:underline js-remove-from-cart" data-product-id="${item.id}" data-product-size="${item.size || ''}">remove</button>
          </div>
        </div>
      `;
      cartItemsContainer.insertAdjacentHTML('beforeend', itemHtml);
    });

    // Add event listeners for newly rendered items
    cartItemsContainer.querySelectorAll('.js-remove-from-cart').forEach(button => {
      button.addEventListener('click', (event) => {
        const productId = event.target.dataset.productId;
        const productSize = event.target.dataset.productSize || null;
        removeFromCart(productId, productSize);
      });
    });

    cartItemsContainer.querySelectorAll('.js-cart-quantity').forEach(input => {
      input.addEventListener('change', (event) => {
        const productId = event.target.dataset.productId;
        const productSize = event.target.dataset.productSize || null;
        const newQuantity = event.target.value;
        updateCartItemQuantity(productId, newQuantity, productSize);
      });
    });

    if (cartSubtotalSpan) cartSubtotalSpan.textContent = `£${subtotal.toFixed(2)}`;
    if (cartShippingSpan) cartShippingSpan.textContent = `£${shipping.toFixed(2)}`;
    if (cartTotalSpan) cartTotalSpan.textContent = `£${(subtotal + shipping).toFixed(2)}`;
  };

  // Initial render of cart page and count on load
  updateCartCount();
  renderCartPage();


  // Product Filtering Logic (for archive.blade.php)
  const productGridContainer = document.getElementById('product-grid-container');
  const productPaginationContainer = document.getElementById('product-pagination-container');
  const applyFiltersButton = document.getElementById('apply-filters-button');
  const mobileApplyFiltersButton = document.getElementById('mobile-apply-filters-button');
  const priceRangeInput = document.getElementById('price-range-input');
  const priceRangeValueSpan = document.getElementById('price-range-value');
  const mobilePriceRangeInput = document.getElementById('mobile-price-range-input');
  const mobilePriceRangeValueSpan = document.getElementById('mobile-price-range-value');

  // Dummy Product Data
  const allProducts = [
    {
      id: 'prod-1', title: 'the midi wrap dress', description: 'effortless elegance', price: 42.00, isNew: true,
      primaryImage: 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80',
      category: 'dresses', sizes: ['XS', 'S', 'M', 'L'], color: 'white',
      thumbnails: ['https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-2', title: 'oversized knit sweater', description: 'cozy comfort', price: 55.00, isNew: false,
      primaryImage: 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'tops', sizes: ['S', 'M', 'L', 'XL'], color: 'sage',
      thumbnails: ['https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-3', title: 'high-waisted denim', description: 'classic fit', price: 38.00, isNew: false,
      primaryImage: 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'bottoms', sizes: ['XS', 'S', 'M', 'L', 'XL'], color: 'black',
      thumbnails: ['https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-4', title: 'silk camisole', description: 'luxurious feel', price: 29.00, isNew: true,
      primaryImage: 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'tops', sizes: ['XS', 'S', 'M'], color: 'white',
      thumbnails: ['https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-5', title: 'leather ankle boots', description: 'versatile style', price: 75.00, isNew: false,
      primaryImage: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'accessories', sizes: ['5', '6', '7', '8', '9'], color: 'black',
      thumbnails: ['https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-6', title: 'pleated midi skirt', description: 'elegant and flowy', price: 48.00, isNew: true,
      primaryImage: 'https://images.unsplash.com/photo-1594736797933-d0601ba2fe65?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1594736797933-d0601ba2fe65?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'bottoms', sizes: ['S', 'M', 'L'], color: 'sage',
      thumbnails: ['https://images.unsplash.com/photo-1594736797933-d0601ba2fe65?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-7', title: 'minimalist earrings', description: 'subtle statement', price: 18.00, isNew: false,
      primaryImage: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop&auto=format&q=80&sat=-100',
      category: 'accessories', sizes: [], color: 'white',
      thumbnails: ['https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-8', title: 'classic leather clutch', description: 'everyday essential', price: 65.00, isNew: false,
      primaryImage: 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=400&h=500&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=400&h=500&fit=crop&auto=format&q=80&sat=-100',
      category: 'accessories', sizes: [], color: 'black',
      thumbnails: ['https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-9', title: 'organic cotton tee', description: 'soft and breathable', price: 30.00, isNew: true,
      primaryImage: 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'tops', sizes: ['XS', 'S', 'M', 'L', 'XL'], color: 'white',
      thumbnails: ['https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-10', title: 'wide-leg linen pants', description: 'relaxed and chic', price: 60.00, isNew: false,
      primaryImage: 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'bottoms', sizes: ['S', 'M', 'L'], color: 'black',
      thumbnails: ['https://images.unsplash.com/photo-1582552938357-32b906df40cb?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-11', title: 'maxi summer dress', description: 'breezy and beautiful', price: 70.00, isNew: true,
      primaryImage: 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&h=800&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=600&h=800&fit=crop&auto=format&q=80&sat=-100',
      category: 'dresses', sizes: ['S', 'M', 'L'], color: 'sage',
      thumbnails: ['https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=150&h=180&fit=crop&auto=format&q=80']
    },
    {
      id: 'prod-12', title: 'statement necklace', description: 'bold and unique', price: 35.00, isNew: false,
      primaryImage: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop&auto=format&q=80',
      hoverImage: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop&auto=format&q=80&sat=-100',
      category: 'accessories', sizes: [], color: 'white',
      thumbnails: ['https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=150&h=180&fit=crop&auto=format&q=80', 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=150&h=180&fit=crop&auto=format&q=80']
    },
  ];

  let currentFilters = JSON.parse(localStorage.getItem('fashl_filters')) || {
    category: [],
    size: [],
    color: null,
    price: 200,
    page: 1,
    perPage: 9 // Number of products per page
  };

  const saveFilters = () => {
    localStorage.setItem('fashl_filters', JSON.stringify(currentFilters));
  };

  const renderProducts = (productsToRender) => {
    if (!productGridContainer) return; // Not on the shop page

    productGridContainer.innerHTML = ''; // Clear existing products
    productPaginationContainer.innerHTML = ''; // Clear existing pagination

    const startIndex = (currentFilters.page - 1) * currentFilters.perPage;
    const endIndex = startIndex + currentFilters.perPage;
    const paginatedProducts = productsToRender.slice(startIndex, endIndex);

    if (paginatedProducts.length === 0) {
      productGridContainer.innerHTML = '<p class="col-span-full text-center text-fashl-black font-inter text-lg">No products found matching your filters.</p>';
      return;
    }

    paginatedProducts.forEach(product => {
      const productCardHtml = `
        <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-500 touch-manipulation">
          <div class="relative overflow-hidden">
            <picture>
              <source srcset="${product.primaryImage}?w=300&h=400&fit=crop&auto=format&q=80 300w, ${product.primaryImage}?w=600&h=800&fit=crop&auto=format&q=80 600w, ${product.primaryImage}?w=1200&h=1600&fit=crop&auto=format&q=80 1200w" type="image/webp" sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw">
              <img src="${product.primaryImage}" alt="${product.title}" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700 group-active:scale-105" loading="lazy"
                   srcset="${product.primaryImage}?w=300&h=400&fit=crop&auto=format&q=80 300w, ${product.primaryImage}?w=600&h=800&fit=crop&auto=format&q=80 600w, ${product.primaryImage}?w=1200&h=1600&fit=crop&auto=format&q=80 1200w" sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw">
            </picture>
            <picture class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
              <source srcset="${product.hoverImage}?w=300&h=400&fit=crop&auto=format&q=80 300w, ${product.hoverImage}?w=600&h=800&fit=crop&auto=format&q=80 600w, ${product.hoverImage}?w=1200&h=1600&fit=crop&auto=format&q=80 1200w" type="image/webp" sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw">
              <img src="${product.hoverImage}" alt="${product.title} alternate view" class="w-full h-80 object-cover" loading="lazy"
                   srcset="${product.hoverImage}?w=300&h=400&fit=crop&auto=format&q=80 300w, ${product.hoverImage}?w=600&h=800&fit=crop&auto=format&q=80 600w, ${product.hoverImage}?w=1200&h=1600&fit=crop&auto=format&q=80 1200w" sizes="(max-width: 768px) 100vw, (max-width: 1024px) 50vw, 25vw">
            </picture>
            
            <div class="absolute inset-0 bg-black/20 opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 lg:flex items-center justify-center hidden">
              <div class="flex gap-3">
                <button class="bg-white text-black p-3 rounded-full hover:bg-gray-100 transition-colors open-quick-view" aria-label="Quick View"
                  data-product-id="${product.id}"
                  data-product-title="${product.title}"
                  data-product-description="${product.description}"
                  data-product-price="£${product.price.toFixed(2)}"
                  data-product-main-image="${product.primaryImage}"
                  data-product-thumbnails='${JSON.stringify(product.thumbnails)}'
                >
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </button>
                <button class="bg-white text-black p-3 rounded-full hover:bg-gray-100 transition-colors js-add-to-wishlist" aria-label="Add to Wishlist" data-product-id="${product.id}">
                  <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </button>
              </div>
            </div>

            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-active:opacity-100 transition-opacity duration-200 lg:hidden">
              <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end">
                <div class="text-white">
                  <h3 class="font-semibold text-sm mb-1">${product.title}</h3>
                  <p class="text-lg font-bold">£${product.price.toFixed(2)}</p>
                </div>
                <button class="bg-white text-black p-3 rounded-full min-h-[44px] min-w-[44px] flex items-center justify-center js-add-to-cart" aria-label="Add to Cart"
                  data-product-id="${product.id}"
                  data-product-title="${product.title}"
                  data-product-price="${product.price.toFixed(2)}"
                  data-product-image="${product.primaryImage}?w=100&h=120&fit=crop&auto=format&q=80"
                >
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </button>
              </div>
            </div>
            
            ${product.isNew ? `<span class="absolute top-4 left-4 bg-fashl-sage text-white px-3 py-1 text-xs font-bold uppercase rounded-full">new</span>` : ''}
          </div>
          
          <div class="p-6 lg:block hidden">
            <h3 class="font-montserrat text-xl font-bold lowercase text-fashl-black mb-2 group-hover:text-fashl-sage transition-colors">
              ${product.title}
            </h3>
            <p class="text-gray-600 text-sm mb-4">${product.description}</p>
            
            <div class="flex items-center justify-between">
              <span class="text-2xl font-bold text-fashl-black">£${product.price.toFixed(2)}</span>
              <button class="btn btn-primary px-6 py-2 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 js-add-to-cart"
                data-product-id="${product.id}"
                data-product-title="${product.title}"
                data-product-price="${product.price.toFixed(2)}"
                data-product-image="${product.primaryImage}?w=100&h=120&fit=crop&auto=format&q=80"
              >
                add to cart
              </button>
            </div>
          </div>
        </div>
      `;
      productGridContainer.insertAdjacentHTML('beforeend', productCardHtml);
    });

    // Re-attach quick view and add to cart listeners for newly rendered products
    attachProductCardListeners();

    // Render Pagination
    const totalPages = Math.ceil(productsToRender.length / currentFilters.perPage);
    if (totalPages > 1) {
      let paginationHtml = '<nav class="flex space-x-2">';
      for (let i = 1; i <= totalPages; i++) {
        paginationHtml += `
          <a href="#" class="px-4 py-2 border border-fashl-black rounded-md hover:bg-fashl-black hover:text-fashl-white js-pagination-link ${currentFilters.page === i ? 'bg-fashl-black text-fashl-white' : ''}" data-page="${i}">${i}</a>
        `;
      }
      paginationHtml += '</nav>';
      productPaginationContainer.insertAdjacentHTML('beforeend', paginationHtml);

      productPaginationContainer.querySelectorAll('.js-pagination-link').forEach(link => {
        link.addEventListener('click', (event) => {
          event.preventDefault();
          currentFilters.page = parseInt(event.target.dataset.page, 10);
          saveFilters();
          applyFilters();
          window.scrollTo({ top: 0, behavior: 'smooth' }); // Scroll to top of products
        });
      });
    }
  };

  const applyFilters = () => {
    let filteredProducts = [...allProducts]; // Start with all products

    // Filter by Category
    if (currentFilters.category.length > 0) {
      filteredProducts = filteredProducts.filter(product =>
        currentFilters.category.includes(product.category)
      );
    }

    // Filter by Size
    if (currentFilters.size.length > 0) {
      filteredProducts = filteredProducts.filter(product =>
        currentFilters.size.some(s => product.sizes.includes(s))
      );
    }

    // Filter by Color
    if (currentFilters.color) {
      filteredProducts = filteredProducts.filter(product =>
        product.color === currentFilters.color
      );
    }

    // Filter by Price
    filteredProducts = filteredProducts.filter(product =>
      product.price <= currentFilters.price
    );

    renderProducts(filteredProducts);
    saveFilters(); // Save filters after applying
  };

  const updateFilterUI = () => {
    // Update Category checkboxes
    document.querySelectorAll('input[name="category"]').forEach(checkbox => {
      checkbox.checked = currentFilters.category.includes(checkbox.value);
    });

    // Update Size checkboxes
    document.querySelectorAll('input[name="size"]').forEach(checkbox => {
      checkbox.checked = currentFilters.size.includes(checkbox.value);
    });

    // Update Color radio buttons
    document.querySelectorAll('input[name="color"]').forEach(radio => {
      radio.checked = currentFilters.color === radio.value;
    });

    // Update Price range slider
    if (priceRangeInput) {
      priceRangeInput.value = currentFilters.price;
      priceRangeValueSpan.textContent = `£${currentFilters.price}`;
    }
    if (mobilePriceRangeInput) {
      mobilePriceRangeInput.value = currentFilters.price;
      mobilePriceRangeValueSpan.textContent = `£${currentFilters.price}`;
    }
  };

  // Event Listeners for Filters
  if (document.getElementById('filter-category')) {
    document.getElementById('filter-category').addEventListener('change', (event) => {
      if (event.target.name === 'category') {
        if (event.target.checked) {
          currentFilters.category.push(event.target.value);
        } else {
          currentFilters.category = currentFilters.category.filter(cat => cat !== event.target.value);
        }
      }
    });
  }

  if (document.getElementById('filter-size')) {
    document.getElementById('filter-size').addEventListener('change', (event) => {
      if (event.target.name === 'size') {
        if (event.target.checked) {
          currentFilters.size.push(event.target.value);
        } else {
          currentFilters.size = currentFilters.size.filter(s => s !== event.target.value);
        }
      }
    });
  }

  if (document.getElementById('filter-color')) {
    document.getElementById('filter-color').addEventListener('change', (event) => {
      if (event.target.name === 'color') {
        currentFilters.color = event.target.value;
      }
    });
  }

  if (priceRangeInput) {
    priceRangeInput.addEventListener('input', (event) => {
      currentFilters.price = parseInt(event.target.value, 10);
      if (priceRangeValueSpan) priceRangeValueSpan.textContent = `£${currentFilters.price}`;
    });
  }

  if (mobilePriceRangeInput) {
    mobilePriceRangeInput.addEventListener('input', (event) => {
      currentFilters.price = parseInt(event.target.value, 10);
      if (mobilePriceRangeValueSpan) mobilePriceRangeValueSpan.textContent = `£${currentFilters.price}`;
    });
  }

  if (applyFiltersButton) {
    applyFiltersButton.addEventListener('click', () => {
      currentFilters.page = 1; // Reset to first page on new filter application
      applyFilters();
    });
  }

  if (mobileApplyFiltersButton) {
    mobileApplyFiltersButton.addEventListener('click', () => {
      currentFilters.page = 1; // Reset to first page on new filter application
      applyFilters();
      mobileFilterPanel.classList.add('translate-x-full'); // Close mobile filter panel
    });
  }

  // Function to attach listeners to product cards (for quick view and add to cart)
  function attachProductCardListeners() {
    document.querySelectorAll('.open-quick-view').forEach(button => {
      button.removeEventListener('click', handleQuickViewClick); // Remove old listeners
      button.addEventListener('click', handleQuickViewClick); // Add new listeners
    });

    document.querySelectorAll('.js-add-to-cart').forEach(button => {
      button.removeEventListener('click', handleAddToCartClick); // Remove old listeners
      button.addEventListener('click', handleAddToCartClick); // Add new listeners
    });

    document.querySelectorAll('.js-add-to-wishlist').forEach(button => {
      button.removeEventListener('click', handleAddToWishlistClick); // Remove old listeners
      button.addEventListener('click', handleAddToWishlistClick); // Add new listeners
    });
  }

  // Handlers for product card buttons (to be re-attached after rendering)
  function handleQuickViewClick(event) {
    event.preventDefault();
    const button = event.currentTarget;
    const productData = {
      id: button.dataset.productId,
      title: button.dataset.productTitle,
      description: button.dataset.productDescription,
      price: button.dataset.productPrice,
      mainImage: button.dataset.productMainImage,
      thumbnails: JSON.parse(button.dataset.productThumbnails),
    };
    showQuickViewModal(productData);
  }

  function handleAddToCartClick(event) {
    event.preventDefault();
    const button = event.currentTarget;
    const product = {
      id: button.dataset.productId,
      title: button.dataset.productTitle,
      price: parseFloat(button.dataset.productPrice.replace('£', '')),
      image: button.dataset.productImage,
    };
    addToCart(product);
  }

  function handleAddToWishlistClick(event) {
    event.preventDefault();
    const button = event.currentTarget;
    const productId = button.dataset.productId;
    
    if (wishlistItems.has(productId)) {
      wishlistItems.delete(productId);
      button.classList.remove('is-liked');
    } else {
      wishlistItems.add(productId);
      button.classList.add('is-liked');
    }
    
    if (wishlistCountSpan) {
      wishlistCountSpan.textContent = wishlistItems.size;
    }
    localStorage.setItem('fashl_wishlist', JSON.stringify(Array.from(wishlistItems)));
  }


  // Initialize filters and render products on shop page load
  if (productGridContainer) { // Check if on archive/shop page
    updateFilterUI();
    applyFilters();
  }
});
